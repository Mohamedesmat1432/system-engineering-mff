<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';

    protected $fillable = [
        'auction_date',
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

    public function installments()
    {
        return $this->hasManyThrough(Installment::class, Sale::class);
    }
}
