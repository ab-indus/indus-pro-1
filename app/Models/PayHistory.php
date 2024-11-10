<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayHistory extends Model
{
    use HasFactory;
    protected $table = 'pay_history';
    protected $guarded = [];

    protected $fillable = [
        'total_fee',
        'paid_amount',
        'fee_remain',
        'pay_date',
        'next_pay',
        'customer_id',
        'heading',
    ];
    

    public function customer()
    {
        return $this->belongsTo(CustomPayment::class, 'custom_payment_id', 'id');
    }
}
