<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Query\Builder|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property int $merchant_id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read mixed $customer_id
 * @property-read \App\Models\Merchant $merchant
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Transaction[] $transactions
 * @property-read int|null $transactions_count
 * @method static \Database\Factories\CustomerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ImportHistory
 *
 * @property int $id
 * @property string $filename
 * @property int $user_id
 * @property int $imported
 * @property int $duplicates
 * @property int $skipped
 * @property string|null $status
 * @property string|null $error
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereDuplicates($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereError($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereImported($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereSkipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImportHistory whereUserId($value)
 */
	class ImportHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Merchant
 *
 * @property int $id
 * @property int $user_id
 * @property string $merchant_name
 * @property string|null $merchant_phone
 * @property string|null $company_name
 * @property string|null $company_address
 * @property string|null $company_email
 * @property string|null $company_phone
 * @property string|null $busines_category
 * @property string|null $website
 * @property string|null $npwp_name
 * @property string|null $npwp_number
 * @property string|null $npwp_address
 * @property string|null $siup_number
 * @property string|null $tdp_number
 * @property string|null $ktp_director_number
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Transaction|null $transaction
 * @method static \Database\Factories\MerchantFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant newQuery()
 * @method static \Illuminate\Database\Query\Builder|Merchant onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereBusinesCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCompanyAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCompanyEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCompanyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereKtpDirectorNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereMerchantName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereMerchantPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereNpwpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereNpwpName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereNpwpNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereSiupNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereTdpNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|Merchant withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Merchant withoutTrashed()
 * @mixin \Eloquent
 * @property string $merchant_email
 * @property string|null $address
 * @property string $type
 * @property string|null $business_type
 * @property string|null $path_ktp_owner
 * @property string|null $path_selfi_ktp_owner
 * @property string|null $path_npwp_owner
 * @property string|null $path_siup_company
 * @property string|null $path_certificate_company
 * @property string|null $path_npwp_company
 * @property string|null $path_logo
 * @property string $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Customer[] $customers
 * @property-read int|null $customers_count
 * @property-read mixed $merchant_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereBusinessType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereMerchantEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant wherePathCertificateCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant wherePathKtpOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant wherePathLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant wherePathNpwpCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant wherePathNpwpOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant wherePathSelfiKtpOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant wherePathSiupCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereType($value)
 */
	class Merchant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MerchantDisbursement
 *
 * @property int $id
 * @property int $settlement_disbrusement_id
 * @property int $settlement_merchant_id
 * @property int $settlement_id
 * @property int $merchant_id
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantDisbursement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantDisbursement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantDisbursement query()
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantDisbursement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantDisbursement whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantDisbursement whereSettlementDisbrusementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantDisbursement whereSettlementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantDisbursement whereSettlementMerchantId($value)
 */
	class MerchantDisbursement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MerchantSetting
 *
 * @property int $id
 * @property int $merchant_id
 * @property string $key
 * @property array|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantSetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantSetting whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MerchantSetting whereValue($value)
 */
	class MerchantSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NicepaySettlementDetail
 *
 * @property int $id
 * @property string $tid
 * @property string $order_number
 * @property string $payment_method
 * @property string $amount
 * @property string $full_payment_fee
 * @property string $installment_fee
 * @property string $vendor_fee
 * @property string $vat_fee
 * @property string $total_fee
 * @property string $settlement_amount
 * @property \Illuminate\Support\Carbon $settlement_date
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereFullPaymentFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereInstallmentFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereSettlementAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereSettlementDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereTid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereTotalFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereVatFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NicepaySettlementDetail whereVendorFee($value)
 */
	class NicepaySettlementDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PaymentMethod
 *
 * @property int $id
 * @property string $name
 * @property string|null $vendor
 * @property string|null $channel
 * @property array|null $meta
 * @property array|null $options
 * @property string $method
 * @property int $status
 * @property int $is_unique
 * @property int $is_redirect
 * @property int $payment_fee
 * @property string|null $group_name
 * @property int $expired_duration
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PaymentMethodFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Query\Builder|PaymentMethod onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereExpiredDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereGroupName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereIsRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereIsUnique($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod wherePaymentFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereVendor($value)
 * @method static \Illuminate\Database\Query\Builder|PaymentMethod withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PaymentMethod withoutTrashed()
 * @mixin \Eloquent
 * @property string|null $group
 * @property int $is_active
 * @property int $is_percent_payment_fee
 * @property int $is_percent_payment_vat_fee
 * @property string $payment_vat_fee
 * @property int $is_percent_platform_fee
 * @property string $platform_fee
 * @property int $is_percent_platform_vat_fee
 * @property string $platform_vat_fee
 * @property-read mixed $payment_method_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereIsPercentPaymentFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereIsPercentPaymentVatFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereIsPercentPlatformFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereIsPercentPlatformVatFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod wherePaymentVatFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod wherePlatformFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod wherePlatformVatFee($value)
 */
	class PaymentMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PersonalAccessToken
 *
 * @property int $id
 * @property string $tokenable_type
 * @property int $tokenable_id
 * @property string $name
 * @property string $token
 * @property array|null $abilities
 * @property \Illuminate\Support\Carbon|null $last_used_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $tokenable
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereAbilities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereLastUsedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereTokenableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereTokenableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereUpdatedAt($value)
 */
	class PersonalAccessToken extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property int|null $category_id
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property string|null $content
 * @property int $is_publish
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PaymentMethod|null $paymentMethods
 * @method static \Database\Factories\PostFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Query\Builder|Post onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsPublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Post withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Post withoutTrashed()
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $merchant_id
 * @property string|null $name
 * @property string|null $sku
 * @property string|null $image_url
 * @property string|null $price
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read mixed $product_id
 * @property-read \App\Models\Merchant $merchant
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Query\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Product withoutTrashed()
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SettingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Query\Builder|Setting onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|Setting withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Setting withoutTrashed()
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Settlement
 *
 * @property int $id
 * @property int $creator_id
 * @property string $status
 * @property int $total_transactions
 * @property int $total_fulfillment
 * @property int $total_unfulfillment
 * @property string $vendor_gross_total
 * @property string|null $vendor_full_payment
 * @property string $vendor_fee
 * @property string $vendor_vat_fee
 * @property string $vendor_subtotal
 * @property string $platform_fee
 * @property string $platform_vat_fee
 * @property string $administration_fee
 * @property string $net_total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-write mixed $end_date_at
 * @property-write mixed $start_date
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereAdministrationFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereNetTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement wherePlatformFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement wherePlatformVatFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereTotalFulfillment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereTotalTransactions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereTotalUnfulfillment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereVendorFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereVendorFullPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereVendorGrossTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereVendorSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settlement whereVendorVatFee($value)
 */
	class Settlement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SettlementTransaction
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SettlementTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SettlementTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SettlementTransaction query()
 */
	class SettlementTransaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transaction
 *
 * @property int $id
 * @property string $transaction_id
 * @property int $merchant_id
 * @property string $invoice_number
 * @property string $customer_name
 * @property string $customer_phone
 * @property string $customer_email
 * @property string $status
 * @property string $amount
 * @property string $callback_success_url
 * @property string $callback_fail_url
 * @property string $callback_listener_url
 * @property int $payment_fee
 * @property string $sub_total
 * @property string $total
 * @property string $vendor
 * @property int $payment_method_id
 * @property string|null $payment_at
 * @property string $payment_expired_date
 * @property string|null $payment_payload
 * @property string|null $payment_response
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TransactionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Query\Builder|Transaction onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCallbackFailUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCallbackListenerUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCallbackSuccessUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCustomerPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentPayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereVendor($value)
 * @method static \Illuminate\Database\Query\Builder|Transaction withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Transaction withoutTrashed()
 * @mixin \Eloquent
 * @property int $user_id
 * @property int|null $customer_id
 * @property string|null $payment_methodabble_type
 * @property string|null $payment_method_type
 * @property string|null $type
 * @property string|null $settlement_status
 * @property int $vendor_fee
 * @property string $vendor_vat_fee
 * @property int $is_percent_vendor_vat_fee
 * @property int $platform_fee
 * @property string $platform_vat_fee
 * @property int $is_percent_platform_vat_fee
 * @property int $unique_code
 * @property int $start_unique_code
 * @property int $end_unique_code
 * @property int $increase_total_from_unique_code
 * @property string $vendor_gross_total
 * @property string|null $payment_reference_number
 * @property string $callback_url
 * @property \Illuminate\Support\Carbon $expired_date
 * @property string|null $description
 * @property int|null $is_unique
 * @property string $trx_id
 * @property-read \App\Models\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TransactionItems[] $items
 * @property-read int|null $items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TransactionLog[] $logs
 * @property-read int|null $logs_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\Merchant $merchant
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\PaymentMethod|null $payment_method
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCallbackUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereEndUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereIncreaseTotalFromUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereIsPercentPlatformVatFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereIsPercentVendorVatFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereIsUnique($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentMethodType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentMethodabbleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePlatformFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePlatformVatFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereSettlementStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereStartUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTrxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereVendorFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereVendorGrossTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereVendorVatFee($value)
 */
	class Transaction extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\TransactionItems
 *
 * @property int $id
 * @property int $transaction_id
 * @property string $item_name
 * @property int $item_qty
 * @property string|null $item_sku
 * @property string $item_price
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TransactionItemsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems newQuery()
 * @method static \Illuminate\Database\Query\Builder|TransactionItems onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems query()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereItemPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereItemQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereItemSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|TransactionItems withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TransactionItems withoutTrashed()
 * @mixin \Eloquent
 * @property int|null $product_id
 * @property string|null $name
 * @property int|null $qty
 * @property string|null $sku
 * @property string|null $price
 * @property string|null $image_url
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionItems whereSku($value)
 */
	class TransactionItems extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TransactionLog
 *
 * @property int $id
 * @property int $contract_id
 * @property string|null $name
 * @property string $description
 * @property mixed|null $properties
 * @property mixed|null $meta
 * @property string|null $response
 * @property int|null $causer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $causer
 * @property-read \App\Models\Transaction $contract
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereCauserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionLog whereUpdatedAt($value)
 */
	class TransactionLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $role
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Merchant[] $merchants
 * @property-read int|null $merchants_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $phone
 * @property int|null $verification_code
 * @property string|null $moota_token
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $token
 * @property-read \App\Models\Category|null $category
 * @property-read mixed $user_id
 * @property-read \App\Models\Merchant|null $merchant
 * @property-read \App\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Transaction[] $transactions
 * @property-read int|null $transactions_count
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMootaToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereVerificationCode($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

namespace App\Models{
/**
 * App\Models\WebhookHistory
 *
 * @property int $id
 * @property int $merchant_id
 * @property int $transaction_id
 * @property string $status
 * @property string $trigger
 * @property string $http_verb
 * @property string $webhook_url
 * @property array $payload
 * @property array $headers
 * @property array $meta
 * @property array $tags
 * @property int $attempt
 * @property string $response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $webhook_history_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Transaction[] $transactions
 * @property-read int|null $transactions_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\WebhookHistoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereAttempt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereHeaders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereHttpVerb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereTrigger($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookHistory whereWebhookUrl($value)
 */
	class WebhookHistory extends \Eloquent {}
}

