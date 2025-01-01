<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'shops';

    protected $fillable = [
        'customer_id',
        'shop_id',
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

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function installments()
    {
        return $this->hasMany(Installment::class);
    }
}
