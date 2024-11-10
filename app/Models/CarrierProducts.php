<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierProducts extends Model
{
    use HasFactory;
    protected $table = 'carrier_products';
    protected $fillable = [
        'carrier_info_id',
        'product_name',
        'base_premium',
        'crime_fee',
        'policy_fee',
        'late_fee',
        'reinstatement_fee',
        'Installment_fee',
        'credit_fee',
        'misc_fee',
        'other_fee',
        'total_premium',
        'comission',
        'business_comission',
        'renewal_comission',
    ];

    public function carrierInfo()
    {
        return $this->belongsTo(CarrierInfo::class);
    }
}
