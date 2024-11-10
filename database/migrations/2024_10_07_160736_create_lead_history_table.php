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
        Schema::create('leadHistory', function (Blueprint $table) {
            $table->id();
            $table->string('medium_of_contact')->nullable(); // Radio button - Call, Text, Office, Email-Online
            $table->string('last_name')->nullable(); // Last Name
            $table->string('first_name')->nullable(); // First Name
            $table->string('phone')->nullable(); // Phone
            $table->string('agent_name')->nullable(); // Agent Name
            $table->boolean('rate_now')->default(false); // Checkbox - Rate Now
            $table->boolean('rate_later')->default(false); // Checkbox - Rate Later
            $table->string('dl_number')->nullable(); // DL #
            $table->date('dob')->nullable(); // Date of Birth (DOB)

            $table->string('status')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('need_additional_info')->nullable();
            $table->string('received_info')->nullable();
            $table->string('gave_quote')->nullable();
            $table->string('follow_up_note')->nullable();
            $table->date('appointment_date')->nullable();
            $table->string('appointment_time')->nullable();
            $table->string('appointment_method')->nullable();
            $table->string('product_type')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leadHistory');
    }
};
