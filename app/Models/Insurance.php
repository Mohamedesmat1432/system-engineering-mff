<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'insurances';
    
    protected $fillable = [
        'sale_id',
        'amount',
        'date',
        'status',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
