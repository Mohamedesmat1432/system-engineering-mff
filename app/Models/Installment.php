<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;

    protected $table = 'installments';

    protected $fillable = [
        'sale_id',
        'installment_number',
        'installment_amount',
        'installment_date',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
