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
        Schema::create('agent_new', function (Blueprint $table) {
            $table->id();
            $table->string('name_agent')->nullable();
            $table->string('medium_of_contact')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('reason_for_contact')->nullable();
            $table->string('office_hours_address')->nullable();
            $table->string('lien_holder_confirmation')->nullable();
            $table->string('premium_due_info')->nullable();
            $table->string('quote')->nullable();
            $table->string('collect_rating_info')->nullable();
            $table->string('add_new_policy')->nullable();
            $table->string('make_payment')->nullable();
            $table->string('policy_change')->nullable();
            $table->string('schedule_appointment')->nullable();
            $table->date('appointment_date')->nullable();
            $table->time('appointment_time')->nullable();
            $table->string('office')->nullable();
            $table->string('call')->nullable();
            $table->text('notes')->nullable();
            // $table->string('ToDo')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_new');
    }
};
