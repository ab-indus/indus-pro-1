<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPay extends Model
{
    use HasFactory;
    protected $table = 'client_pays';

    protected $fillable = [
        'user_id',
        'last_name',
        'first_name',
        'middle_name',
        'preferred_name',
        'carrier',
        'policy_number',
        'type_of_policy',
        'due_date',
        'amount_due',
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
        'email',
        'phone',
        'dob',
        'ssn',
        'zip',
        'type_of_id',
        'dl_id',
        'insured_items',
        'insured_drivers',
        'excluded_drivers',
        'lien',
        'effective_date',
        'expiration_date',
        'term_months',
        'base_premium',
        'state_fee_mvca',
        'policy_fee',
        'roadside_assistance_fee',
        'sr22',
        'other_fee',
        'total_premium',
        'annual_premium', 'status',
        'policy_id'
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
