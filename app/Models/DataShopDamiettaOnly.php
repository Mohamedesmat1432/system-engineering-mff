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
        'governmentId',
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
        'insurance',
        'remaining_sale',
        'maintenance_deposit',
        'installments'
    ];

    protected $casts = [
        'insurance' => 'array',
        'remaining_sale' => 'array',
        'maintenance_deposit' => 'array',
        'installments' => 'array',
    ];

    public function government(): BelongsTo
    {
        return $this->belongsTo(Government::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->when($search, function ($query) use ($search) {
            $query->where('national_number', 'like', "%{$search}%")
                ->orWhere('buyer_name', 'like', "%{$search}%");
        });
    }

    public function scopeSearchByGovernmentId($query, $governmentId)
    {
        return $query->when($governmentId, function ($query) use ($governmentId) {
            $query->where('government_id', '=', $governmentId);
        });
    }

    public function scopeSearchByCityId($query, $cityId)
    {
        return $query->when($cityId, function ($query) use ($cityId) {
            $query->where('city_id', '=', $cityId);
        });
    }
}
