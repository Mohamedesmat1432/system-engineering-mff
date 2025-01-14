<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'customer_id',
        'shop_id',
        'auction_date',
        'payment_method',
        'insurance_amount',
        'insurance_date',
        'remaining_sale_amount',
        'remaining_sale_date',
        'maintenance_deposit_amount',
        'maintenance_deposit_date',
        'afine_amount',
        'afine_date',
        // 'installment_amount_1',
        // 'installment_date_1',
        // 'installment_amount_2',
        // 'installment_date_2',
        // 'installment_amount_3',
        // 'installment_date_3',
        // 'installment_amount_4',
        // 'installment_date_4',
        // 'installment_amount_5',
        // 'installment_date_5',
        // 'installment_amount_6',
        // 'installment_date_6',
        // 'installment_amount_7',
        // 'installment_date_7',
        // 'installment_amount_8',
        // 'installment_date_8',
        // 'installment_amount_9',
        // 'installment_date_9',
        // 'installment_amount_10',
        // 'installment_date_10',
        // 'installment_amount_11',
        // 'installment_date_11',
        // 'installment_amount_12',
        // 'installment_date_12',
        // 'installment_amount_13',
        // 'installment_date_13',
        // 'installment_amount_14',
        // 'installment_date_14',
        // 'installment_amount_15',
        // 'installment_date_15',
    ];

    public function scopeSearch($query, $search)
    {
        return $query->when($search, function ($query) use ($search) {
            $query->where('auction_date', 'like', "%{$search}%")
                ->orWhereHas('customer', function ($query) use ($search) {
                    $query->where('national_number', 'like', "%{$search}%")
                        ->orWhere('customer_name', 'like', "%{$search}%");
                })
                ->orWhereHas('shop', function ($query) use ($search) {
                    $query->where('location', 'like', "%{$search}%")
                        ->orWhere('center', 'like', "%{$search}%");
                })
                ->orWhereHas('shop.government', function ($query) use ($search) {
                    $query->where('name_ar', 'like', "%{$search}%")
                        ->orWhere('name_en', 'like', "%{$search}%");
                })
                ->orWhereHas('shop.city', function ($query) use ($search) {
                    $query->where('name_ar', 'like', "%{$search}%")
                        ->orWhere('name_en', 'like', "%{$search}%");
                });
        });
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function installments()
    {
        return $this->hasMany(Installment::class);
    }
}
