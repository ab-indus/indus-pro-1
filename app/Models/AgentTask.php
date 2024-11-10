<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentTask extends Model
{
    use HasFactory;
    protected $table = 'agent_tasks';
    protected $fillable = [
        'agent_new_id', 'name_agent', 'task_date', 'task_time'
    ];

    // Define the inverse of the relationship
    public function agentNew()
    {
        return $this->belongsTo(AgentNew::class, 'agent_new_id');
    }
}
