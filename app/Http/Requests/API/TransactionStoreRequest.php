<?php

namespace App\Http\Requests\API;

use App\Enum\Transactions\TransactionPaymentMethodEnum;
use App\Enum\TransactionStatusEnum;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;

class TransactionStoreRequest extends FormRequest
{
    protected $paymentMethodId = null;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($paymentMethod = PaymentMethod::findByHashid($this->payment_method_id)) {
            $this->payment_method_type = $paymentMethod->channel;
            $this->paymentMethodId = $paymentMethod->id;
        }

        if(is_null($this->with_unique_code)) {
            $this->with_unique_code = 1;
        }

        return [
            'invoice_number' => 'required|max:225',
            'amount' => 'required|numeric',
            'payment_method_id' => 'required',
            'payment_method_type' => 'nullable',
            'callback_url' => 'nullable|url',
            'unique_code' => 'nullable|numeric',
            'with_unique_code' => 'nullable|in:0,1',
            'increase_total_from_unique_code' => 'nullable|in:0,1',
            'start_unique_code' => 'nullable|numeric',
            'end_unique_code' => 'nullable|numeric',
            'expired_date' => 'nullable|date_format:Y-m-d H:i:s|after:now',
            'description' => 'nullable',
            'customer.name' => $this->customer && Arr::get($this->customer, 'name', '') == '' ? 'required|nullable|string'  : 'sometimes|nullable|string',
            'customer.email' => 'sometimes|nullable|string',
            'customer.phone' => 'sometimes|nullable|numeric',
            'items.*.name' => 'required|string',
            'items.*.qty' => 'nullable|integer',
            'items.*.price' => 'required|integer',
            'items.*.sku' => 'required|string',
            'items.*.image_url' => 'nullable|string',
            'items.*.description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'expired_date.after' => 'The expired date must be a date after now (Asia/Jakarta GMT+7).'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator)  {
            $this->expiredDateValidate($validator);

            $this->paymentMethodValidate($validator);

            $this->invoiceValidate($validator);

            $this->amountValidate($validator);

            $this->customUniqueCodeByUserValidate($validator);

            $this->uniqueCodeValidate($validator);

        });
    }

    private function expiredDateValidate($validator)
    {
        if(
            $this->expired_date != null &&
            $this->payment_method_type != TransactionPaymentMethodEnum::BANK_TRANSFER()->value
        ) {
            $hours = Carbon::now()->diffInHours(Carbon::parse($this->expired_date));
            if($hours > 24) {
                $validator->errors()->add('expired_date', "untuk payment_method_type selain bank personal tidak boleh lebih dari 24 jam / kurang dari hari ini");
            }
        }

        if(
            $this->payment_method_type == TransactionPaymentMethodEnum::BANK_TRANSFER()->value
        ) {
            $hours = Carbon::now()->diffInHours(Carbon::parse($this->expired_date));
            if($hours > 720) {
                $validator->errors()->add('expired_date', "untuk payment_method_type bank personal tidak boleh kurang dari hari ini dan lebih dari 30 hari");
            }
        }

        return $validator;
    }

    private function paymentMethodValidate($validator)
    {
        try {
            if($this->payment_method_type != TransactionPaymentMethodEnum::BANK_TRANSFER()->value) {
                $payment_method = PaymentMethod::findByHashid($this->payment_method_id);

                if(! $payment_method->is_active) {
                    throw new \Exception("payment method $payment_method->name sedang tidak aktif",422);
                }

                if(! $payment_method) {
                    throw new \Exception('payment method id tidak ditemukan',422);
                }

                if(! $payment_method->is_active) {
                    throw new \Exception('payment method tidak aktif', 422);
                }
            }
        } catch (\Exception $e) {
            $validator->errors()->add('payment_method_id', $e->getMessage());
        }

        return $validator;
    }

    private function invoiceValidate($validator)
    {
        $invoice_exist = Transaction::where('invoice_number', $this->invoice_number)
            ->where('status',TransactionStatusEnum::PENDING()->value)
            ->where('user_id', current_user()->id)
            ->count();

        if($invoice_exist) {
            $validator->errors()->add('invoice_number', "invoice number {$this->invoice_number} sudah digunakan, invoice number harus unique");
        }

        return $validator;
    }

    private function amountValidate($validator)
    {
        if(! $this->items) {
            return $validator;
        }

        $sumTotalPriceItem = array_sum(array_column($this->items, "price"));

        if((int) $sumTotalPriceItem != (int) $this->amount) {
            $validator->errors()->add('amount', "terdapat fraud pada amount, tidak sama dengan jumlah total price pada items");
        }

        return $validator;
    }

    private function customUniqueCodeByUserValidate($validator)
    {
        if($this->unique_code == 0) {
            return $validator;
        }

        $total = $this->amount + $this->unique_code;

        $exist = Transaction::where('status', TransactionStatusEnum::PENDING()->value)
            ->when(Auth::check(), function ($q) {
                $q->where('user_id', current_user()->id);
            })
            ->where('payment_method_id', $this->paymentMethodId)
            ->where('total', $total)
            ->count();

        if($exist) {
            $validator->errors()->add('unique_code', "terdapat unique code yang sama dan masih aktif pada transaksi anda, silahkan generate ulang unique code");
        }

        return $validator;
    }

    private function uniqueCodeValidate($validator)
    {
        if(
            $this->with_unique_code == 1 &&
            $this->unique_code == 0 &&
            $this->start_unique_code == 0
        ) {
            $validator->errors()->add('start_unique_code', "nilai tidak boleh 0 atau minimal 1");
        }

        if(
            $this->payment_method_type != TransactionPaymentMethodEnum::BANK_TRANSFER()->value &&
            $this->unique_code == 0 &&
            strlen($this->end_unique_code) == 1
        ) {
            $validator->errors()->add('end_unique_code', "nilai harus lebih dari 1 digit dan maksimal 3 digit");
        }

//        if($this->unique_code > 0 && $this->start_unique_code == 0) {
//            $validator->errors()->add('start_unique_code', "value harus bernilai lebih dari NOL");
//        }
//
//        if($this->unique_code > 0 && $this->end_unique_code == 0) {
//            $validator->errors()->add('end_unique_code', "value harus bernilai lebih dari NOL");
//        }

        if(
            $this->with_unique_code == 1 &&
            $this->unique_code == 0 &&
            $this->start_unique_code == $this->end_unique_code
        ) {
            $validator->errors()->add('end_unique_code', "nilai tidak boleh sama dan harus lebih besar dari start_unique_code");
        }

    }
}
