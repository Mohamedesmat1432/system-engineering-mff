<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemainingSale extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'remaining_sales';
    
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
