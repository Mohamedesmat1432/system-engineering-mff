<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'customer_name',
        'national_number',
        'count_national_number',
        'phone_number',
        'home_number',
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->when($search, function ($query) use ($search) {
            $query->where('national_number', 'like', "%{$search}%")
                ->orWhere('customer_name', 'like', "%{$search}%");
        });
    }
}
