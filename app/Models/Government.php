<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Government extends Model
{
    use HasFactory;

    protected $table = 'governments';

    protected $fillable = [
        'name_ar',
        'name_en'
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'government_id');
    }

    public function scopeSearch($query, $search)
    {
        return $query->when($search, function ($query) use ($search) {
            $query->where('name_ar', 'like', "%{$search}%")
                ->orWhere('name_en', 'like', "%{$search}%");
        });
    }
}
