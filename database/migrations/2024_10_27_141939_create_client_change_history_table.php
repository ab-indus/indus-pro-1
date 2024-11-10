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
        Schema::create('clientChangeHistory', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('policy_id')->nullable(); // Foreign key for policy_new table
            $table->string('carrier')->nullable();
            $table->string('policy_number')->nullable();
            $table->string('type_of_policy')->nullable();
            $table->string('driver_action')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('dl')->nullable();
            $table->string('vehicle_option')->nullable();
            $table->string('vin')->nullable();
            $table->string('year')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('change_option')->nullable();
            $table->string('new_phone_number')->nullable();
            $table->string('new_email')->nullable();
            $table->string('new_address')->nullable();
            $table->timestamps();

            // New fields
            $table->string('agent')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('auto_pay')->default(false);
            $table->string('coverage')->nullable();
            $table->string('lien_option')->nullable();
            $table->text('notes')->nullable();
            $table->text('agent_notes')->nullable();
            $table->string('completed')->nullable();
            $table->timestamp('done_time')->nullable();

            // Foreign key constraint
            $table->foreign('policy_id')->references('id')->on('policy_new')->onDelete('set null')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientChangeHistory');
    }
};
