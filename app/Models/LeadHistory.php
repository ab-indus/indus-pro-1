<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadHistory extends Model
{
    use HasFactory;
    protected $table = 'leadHistory'; // Specify table name if different from model name

    protected $fillable = [
        'medium_of_contact',
        'last_name',
        'first_name',
        'phone',
        'agent_name',
        'rate_now',
        'rate_later',
        'dl_number',
        'dob',

        'status', 'assigned_to', 'need_additional_info', 'received_info', 'gave_quote', 
        'follow_up_note', 'appointment_date', 'appointment_time', 
        'appointment_method', 'product_type',
    ];
}
