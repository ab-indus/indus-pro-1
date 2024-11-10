<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierPolicies extends Model
{
    use HasFactory;
    protected $table = 'carrier_policies';
    protected $fillable = [
        'carrier_info_id',
        'status',
        'policy_number',
        'policy_type',
        'policy_term',
        'base_premium',
        'total_premium',
        'date_due',
        'amount_due',
        'date_paid',
        'amount_paid',
        'commission_due',
        'new_amount_due',
        'new_due_date',
    ];

    public function carrierInfo()
    {
        return $this->belongsTo(CarrierInfo::class);
    }
}
