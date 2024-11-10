<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPolicy extends Model
{
    use HasFactory;
    protected $table = 'payment_policy';
    
    // Specify fillable fields for mass assignment
    protected $fillable = [
        'policy_id',
        'person',
        'first_name',
        'last_name',
        'carrier',
        'amount_due',
        'due_date',
        'new_amount_due',
        'new_due_date',
        'amount_paid_cc',
        'amount_paid_cash',
        'direct_pay',
        'name_on_card',
        'debit_card',
        'number_1st_4',
        'number_2nd_4',
        'number_3rd_4',
        'number_4th_4',
        'expiration_1',
        'expiration_2',
        'billing_zip',
        'cvc',
        'notes', 'payment_for', 'policy_number'
    ];

    // Define the relationship to the PolicyNew model
    public function policy()
    {
        return $this->belongsTo(PolicyNew::class, 'policy_id');
    }
}
