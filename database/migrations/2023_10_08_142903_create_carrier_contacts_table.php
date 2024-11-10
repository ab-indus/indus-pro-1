<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrier_contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrier_info_id');
            $table->foreign('carrier_info_id')->references('id')->on('carrier_info')->onDelete('cascade');
            $table->string('contact_name');
            $table->string('contact_email')->nullable();
            $table->string('marketing_email')->nullable();
            $table->string('marketing_phone')->nullable();
            $table->string('underwriting_phone')->nullable();
            $table->string('underwriting_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('agent_phone')->nullable();
            $table->string('agent_email')->nullable();
            $table->string('claims_phone')->nullable();
            $table->string('claims_email')->nullable();
            $table->string('accounting_phone')->nullable();
            $table->string('accounting_email')->nullable();
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrier_contacts');
    }
};
