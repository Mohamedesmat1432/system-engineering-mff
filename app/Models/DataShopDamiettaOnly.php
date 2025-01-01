<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataShopDamiettaOnly extends Model
{
    use HasFactory;

    protected $table = 'data_shop_damietta_onlies';

    protected $fillable = [
        'government_id',
        'auction_date',
        'city_id',
        'center',
        'location',
        'building_number',
        'building_entrance_number',
        'shop_number',
        'type_of_shop',
        'shop_area',
        'buyer_name',
        'national_number',
        'count_of_national_number',
        'phone_number',
        'home_number',
        'sell_price',
        'sell_price_for_meter',
        'payment_method',
        'insurance_amount',
        'insurance_date',
        'remaining_sale_amount',
        'remaining_sale_date',
        'maintenance_deposit_amount',
        'maintenance_deposit_date',
        'afine_amount',
        'afine_date',
        'installment_amount_1',
        'installment_date_1',
        'installment_amount_2',
        'installment_date_2',
        'installment_amount_3',
        'installment_date_3',
        'installment_amount_4',
        'installment_date_4',
        'installment_amount_5',
        'installment_date_5',
        'installment_amount_6',
        'installment_date_6',
        'installment_amount_7',
        'installment_date_7',
        'installment_amount_8',
        'installment_date_8',
        'installment_amount_9',
        'installment_date_9',
        'installment_amount_10',
        'installment_date_10',
        'installment_amount_11',
        'installment_date_11',
        'installment_amount_12',
        'installment_date_12',
        'installment_amount_13',
        'installment_date_13',
        'installment_amount_14',
        'installment_date_14',
        'installment_amount_15',
        'installment_date_15',
    ];

    protected $casts = [];

    public function government(): BelongsTo
    {
        return $this->belongsTo(Government::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function scopeSearch($query, $search = null, $governmentId = null, $cityId = null)
    {
        return $query->when($search, function ($query) use ($search) {
            $query->where('national_number', 'like', "%{$search}%")
                ->orWhere('buyer_name', 'like', "%{$search}%");
        })->when($governmentId, function ($query) use ($governmentId) {
            $query->where('government_id', '=', $governmentId);
        })->when($cityId, function ($query) use ($cityId) {
            $query->where('city_id', '=', $cityId);
        });
    }
}
