<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientChangeHistory extends Model
{
    use HasFactory;
    protected $table = 'clientChangeHistory';

    protected $fillable = [
        'policy_id', 'carrier', 'policy_number', 'type_of_policy', 'driver_action', 'driver_name', 
        'dl', 'vehicle_option', 'vin', 'year', 'make', 'model', 'change_option', 'new_phone_number', 
        'new_email', 'new_address', 'agent', 'first_name', 'last_name', 'phone', 'auto_pay', 
        'coverage', 'lien_option', 'notes', 'agent_notes', 'completed', 'done_time'
    ];

    // Define relationship to PolicyNew (if needed)
    public function policy()
    {
        return $this->belongsTo(PolicyNew::class, 'policy_id');
    }
}
