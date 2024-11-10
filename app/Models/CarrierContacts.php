<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierContacts extends Model
{
    use HasFactory;
    protected $table = 'carrier_contacts';

    protected $fillable = [
        'carrier_info_id',
        'contact_name',
        'contact_email',
        'marketing_email',
        'marketing_phone',
        'underwriting_phone',
        'underwriting_email',
        'customer_phone',
        'customer_email',
        'agent_phone',
        'agent_email',
        'claims_phone',
        'claims_email',
        'accounting_phone',
        'accounting_email',
        // Add other fillable fields as needed
    ];

    public function carrierInfo()
    {
        return $this->belongsTo(CarrierInfo::class, 'carrier_info_id');
    }
}
