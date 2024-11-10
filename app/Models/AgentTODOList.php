<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentTODOList extends Model
{
    use HasFactory;
    protected $table = 'AgentTODOList';

    protected $fillable = [
        'medium_of_contact',
        'done',
        'agent',
        'contact_name',
        'contact_number',
        'office_hours_address',
        'lien_holder_confirmation',
        'premium_due_info',
        'quote',
        'collect_rating_info',
        'add_new_policy',
        'make_payment',
        'policy_change',
        'appointment_date',
        'appointment_time',
        'office',
        'call',
        'notes',
        'doc_save',
        'proof_upload',
        'picture_upload',
        'done_date', 'reason_of_contact', 'done_time', 'first_name','last_name'
    ];
}
