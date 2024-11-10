<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyChange extends Model
{
    use HasFactory;
    protected $table = 'policy_changes';


    protected $fillable = [
        'policy_id',
        'person',
        'first_name',
        'last_name',
        'carrier',
        'policy_number',
        'driver_action',
        'driver_name',
        'dl',
        'vehicle_option',
        'vin',
        'year',
        'make',
        'model',
        'change_option',
        'effective_date',
        'annual_premium',
        'new_phone_number',
        'new_email',
        'new_address',
        'notes','AutoPayBox'
    ];

    // Define the relationship with the Policy model
    public function policy()
    {
        return $this->belongsTo(PolicyNew::class);
    }
}
