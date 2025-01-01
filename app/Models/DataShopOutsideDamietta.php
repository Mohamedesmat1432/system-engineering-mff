<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataShopOutsideDamietta extends Model
{
    use HasFactory;

    protected $table = 'data_shop_outside_damiettas';

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
        if ($search) {
            $query->where('national_number', 'like', "%{$search}%");
        }

        if ($governmentId) {
            $query->where('government_id', '=', $governmentId);
        }

        if ($cityId) {
            $query->where('city_id', '=', $cityId);
        }

        return $query;
    }
}
