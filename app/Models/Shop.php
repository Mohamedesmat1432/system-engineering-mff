<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';

    protected $fillable = [
        'government_id',
        'city_id',
        'center',
        'location',
        'building_number',
        'building_entrance_number',
        'shop_number',
        'type_of_shop',
        'shop_area',
        'sell_price',
        'sell_price_for_meter',
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function government()
    {
        return $this->belongsTo(Government::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function scopeSearch($query, $search = null, $governmentId = null, $cityId = null)
    {
        return $query->when($search, function ($query) use ($search) {
            $query->where('auction_date', 'like', "%{$search}%");
        })->when($governmentId, function ($query) use ($governmentId) {
            $query->where('government_id', '=', $governmentId);
        })->when($cityId, function ($query) use ($cityId) {
            $query->where('city_id', '=', $cityId);
        });
    }
}
