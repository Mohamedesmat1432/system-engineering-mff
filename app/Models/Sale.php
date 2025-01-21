<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'sales';

    protected $fillable = [
        'customer_id',
        'shop_id',
        'payment_method',
        'installment_count',
        'description',
    ];

    public function scopeSearch($query, $search)
    {
        return $query->when($search, function ($query) use ($search) {
            $query
                ->whereHas('customer', function ($query) use ($search) {
                    $query->where('national_number', 'like', "%{$search}%")
                        ->orWhere('customer_name', 'like', "%{$search}%");
                })
                ->orWhereHas('shop', function ($query) use ($search) {
                    $query->where('auction_date', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%")
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

    public function insurance()
    {
        return $this->hasOne(Insurance::class);
    }

    public function remainingSale()
    {
        return $this->hasOne(RemainingSale::class);
    }

    public function maintenanceDeposit()
    {
        return $this->hasOne(MaintenanceDeposit::class);
    }

    public function installments()
    {
        return $this->hasMany(Installment::class);
    }
}
