<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyNew extends Model
{
    use HasFactory;
    protected $table = 'policy_new';

    protected $fillable = [
        'autopay',
        'new_customer',
        'rewrite',
        'renew',
        'first_name',
        'middle_name',
        'last_name',
        'preferred_name',
        'email',
        'phone',
        'dob',
        'ssn',
        'zip',
        'type_of_id',
        'dl_id',
        'carrier',
        'policy_number',
        'type_of_policy',
        'insured_items',
        'insured_drivers',
        'excluded_drivers',
        'lien',
        'effective_date',
        'expiration_date',
        'term_months',
        'due_date',
        'amount_due',
        'base_premium',
        'state_fee_mvca',
        'policy_fee',
        'roadside_assistance_fee',
        'sr22',
        'other_fee',
        'total_premium',
        'annual_premium',
        'paid_today',
        'amount_paid_cc',
        'amount_paid_cash',
        'direct_pay',
        'name_on_card',
        'debit_card',
        'credit_card_name',
        'number_1st_4',
        'number_2nd_4',
        'number_3rd_4', 'number_4th_4',
        'expiration_1',
        'expiration_2',
        'billing_zip',
        'cvc',
        'notes',
        'type_of_customer', 'activeBox',
        'user_id'

    ];

     // Define the relationship to the PaymentPolicy model
     public function payments()
     {
         return $this->hasMany(PaymentPolicy::class, 'policy_id');
     }

     public function policyChanges()
     {
         return $this->hasMany(PolicyChange::class);
     }

     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
