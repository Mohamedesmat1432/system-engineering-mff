<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;

    protected $table = 'installments';

    protected $fillable = [
        'installment_sale_id',
        'installment_number',
        'installment_amount',
        'installment_date',
        'installment_is_paid',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
