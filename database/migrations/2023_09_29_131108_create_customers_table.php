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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('cus_id');
            // customer
            
            $table->boolean('Active');
            $table->string('FIRSTNAME');
            $table->string('MIDDLE')->nullable();
            $table->string('LASTNAME');
            $table->date('DOB');
            $table->string('SSN');
            $table->string('TypeofID');
            $table->string('Phone');
            $table->string('CellPhone');
            $table->string('email')->unique()->nullable(false);

            // business
            $table->string('BusinessName');
            $table->string('BusinessForm');
            $table->string('BusinessPhone');
            $table->string('TypeofBusines');
            $table->string('BusinessEmail');
            $table->double('AnnRevenues');
            $table->string('ContactName');
            $table->integer('NoofEmployees');
            $table->string('Contact#');
            $table->string('EIN');
            
            // Partner/Spouse Fields
            $table->string('sp_FIRSTNAME')->nullable();
            $table->string('sp_MIDDLE')->nullable();
            $table->string('sp_LASTNAME')->nullable();
            $table->date('sp_DOB')->nullable();
            $table->string('sp_SSN')->nullable();
            $table->string('sp_TypeofID')->nullable();
            $table->string('sp_Phone')->nullable();
            $table->string('sp_CellPhone')->nullable();
            $table->string('sp_Email')->nullable();
          
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
        Schema::dropIfExists('customers');
    }
};
