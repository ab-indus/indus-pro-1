<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agent_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_new_id')->constrained('agent_new')->onDelete('cascade'); // Foreign key to agent_new table
            $table->string('name_agent')->nullable();
            $table->date('task_date')->nullable();
            $table->time('task_time')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_tasks');
    }
};
