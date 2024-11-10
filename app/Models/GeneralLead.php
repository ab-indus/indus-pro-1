<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralLead extends Model
{
    use HasFactory;
    protected $table = 'general_lead';

    // Allowing mass assignment for these fields
    protected $fillable = [
        'agent_name',
        'contact_medium',
        'last_name',
        'first_name',
        'contact_number',
        'question',
        'notes',
    ];
}
