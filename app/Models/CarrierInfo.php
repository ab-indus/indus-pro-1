<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierInfo extends Model
{
    use HasFactory;
    protected $table = 'carrier_info';
    protected $fillable = [
        'display_name',
        'type',
        'agent_code',
        'agent_url',
        'user_id',
        'password',
        'email',
        'phone',
        'fax',
        'main_email',
        'eo_date',
    ];
}
