<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentNew extends Model
{
    use HasFactory;
    protected $table = 'agent_new';

    protected $fillable = [
        'name_agent',
        'medium_of_contact',
        'contact_name',
        'contact_number',
        'reason_for_contact',
        'office_hours_address',
        'lien_holder_confirmation',
        'premium_due_info',
        'quote',
        'collect_rating_info',
        'add_new_policy',
        'make_payment',
        'policy_change',
        'schedule_appointment',
        'appointment_date',
        'appointment_time',
        'office',
        'call',
        'notes',
    ];

        // Define the one-to-many relationship
        public function agentTasks()
        {
            return $this->hasMany(AgentTask::class, 'agent_new_id');
        }
    
}
