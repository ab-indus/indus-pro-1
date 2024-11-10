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
        Schema::create('policy_changes', function (Blueprint $table) {
            $table->id();
            $table->string('AutoPayBox')->nullable();

            $table->unsignedBigInteger('policy_id');
            $table->string('person')->nullable();;
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();;
            $table->string('carrier')->nullable();;
            $table->string('policy_number')->nullable();;
            $table->string('driver_action')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('dl')->nullable();
            $table->string('vehicle_option')->nullable();
            $table->string('vin')->nullable();
            $table->string('year')->nullable();
            $table->integer('make')->nullable();
            $table->string('model')->nullable();
            $table->string('change_option')->nullable();
            $table->date('effective_date')->nullable();
            $table->string('annual_premium')->nullable();
            $table->string('new_phone_number')->nullable();
            $table->string('new_email')->nullable();
            $table->string('new_address')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('policy_id')->references('id')->on('policy_new')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_changes');
    }
};
