<?php

namespace Tests;

use App\Enum\Merchants\MerchantStatusEnum;
use App\Enum\TransactionStatusEnum;
use App\Models\Customer;
use App\Models\Merchant;
use App\Models\PaymentMethod;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\TransactionItems;
use App\Models\User;
use Artisan;
use Carbon\Carbon;
use Database\Seeders\SettingSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Mix;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\WithFaker;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
        self::dataPreparing();

        // Swap out the Mix manifest implementation, so we don't need
        // to run the npm commands to generate a manifest file for
        // the assets in order to run tests that return views.
        $this->swap(Mix::class, function () {
            return '';
        });

    }

    public function dataPreparing()
    {
        $this->seed(UserSeeder::class);
        $this->seed(SettingSeeder::class);
//        \Illuminate\Support\Facades\Artisan::call('channel:sync');
        \Artisan::call('nicepay:seed');
    }

    public function userActingAs($abilities = ['*']): User
    {
        $user = User::factory()->create();

        // Grant Abilitites
        \Laravel\Sanctum\Sanctum::actingAs($user, $abilities);

        return $user->refresh();
    }

    public function createTransactionFactory(User $user, $amount = 10000, $type_payment = 'Virtual Account') : Transaction
    {
        \Artisan::call('nicepay:seed');

//        \DB::table('payment_methods')->update([
//            'vendor_fee' => 4500,
//            'platform_fee' => 500
//        ]);

        $merchant = Merchant::factory()->create([
            'user_id' => $user->id,
            'is_active' => 1
        ]);

        $customer = Customer::factory()->create([
            'merchant_id' => $merchant->id
        ]);

        $payment_method = PaymentMethod::first();

        $transaction = Transaction::factory()->create([
            'merchant_id' => $merchant->id,
            'customer_id' => $customer->id,
            'customer_name' => $customer->name,
            'customer_email' => $customer->email,
            'customer_phone' => $customer->phone,
            'invoice_number' => $payment_method->channel,
            'payment_method_id' => $payment_method->id,
            'status' => TransactionStatusEnum::PENDING(),
            'payment_payload' => null,
            'payment_response' => null,
            'payment_expired_date' => Carbon::now()->addHours(24),
        ]);

        $transaction_items = TransactionItems::factory()->count(2)->create([
            'transaction_id' => $transaction->id
        ]);

        return $transaction;
    }

    public function makeTransactionFactory(User $user, $amount = 10000, $type_payment = 'Virtual Account') : Transaction
    {
        $merchant = Merchant::factory()->create([
            'user_id' => $user->id,
            'status' => MerchantStatusEnum::VERIFIED()->value
        ]);

        $payment_method = PaymentMethod::factory()->create([
            'is_active' => 1
        ]);

        $transaction = Transaction::factory()->make([
//            'merchant_id' => $merchant->id,
//            'customer_id' => $customer->id,
//            'customer_name' => $customer->name,
//            'customer_email' => $customer->email,
//            'customer_phone' => $customer->phone,
//            'invoice_number' => $payment_method->channel,
            'payment_method_id' => $payment_method->payment_method_id,
//            'status' => TransactionStatusEnum::PENDING(),
            'expired_date' => Carbon::now()->addHours(24)->format('Y-m-d H:i:s'),
            'amount' => $amount,
            'with_unique_code' => 0,
            'payment_payload' => null,
            'payment_response' => null,
        ]);

        $transaction_items = TransactionItems::factory()->count(2)->make([
            'transaction_id' => $transaction->id
        ]);

        return $transaction;
    }
}
