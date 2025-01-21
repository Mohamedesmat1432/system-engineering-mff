<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shops';

    protected $fillable = [
        'shop_code',
        'auction_date',
        'company_id',
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

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function government()
    {
        return $this->belongsTo(Government::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function scopeSearch($query, $search = null)
    {
        return $query->when($search, function ($query) use ($search) {
            $query->where('auction_date', 'like', "%{$search}%")
                ->orWhere('shop_code', 'like', "%{$search}%")
                ->orWhere('center', 'like', "%{$search}%")
                ->orWhere('location', 'like', "%{$search}%")
                ->orWhere('type_of_shop', 'like', "%{$search}%")
                ->orWhere('shop_area', 'like', "%{$search}%")
                ->orWhere('sell_price', 'like', "%{$search}%")
                ->orWhereHas('government', function ($query) use ($search) {
                    $query->where('name_ar', 'like', "%{$search}%")
                        ->orWhere('name_en', 'like', "%{$search}%");
                })->orWhereHas('city', function ($query) use ($search) {
                    $query->where('name_ar', 'like', "%{$search}%")
                        ->orWhere('name_en', 'like', "%{$search}%");
                });
        });
    }

    public function scopeSearchByGovernment($query, $governmentId = null)
    {
        return $query->when($governmentId, function ($query) use ($governmentId) {
            $query->where('government_id', '=', $governmentId);
        });
    }

    public function scopeSearchByCity($query, $cityId = null)
    {
        return $query->when($cityId, function ($query) use ($cityId) {
            $query->where('city_id', '=', $cityId);
        });
    }
}
