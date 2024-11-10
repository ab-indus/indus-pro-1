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
        Schema::create('carrier_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrier_info_id');
            $table->string('product_name')->nullable();
            $table->decimal('base_premium', 10, 2)->nullable();
            $table->decimal('crime_fee', 10, 2)->nullable();
            $table->decimal('policy_fee', 10, 2)->nullable();
            $table->decimal('late_fee', 10, 2)->nullable();
            $table->decimal('reinstatement_fee', 10, 2)->nullable();
            $table->decimal('Installment_fee', 10, 2)->nullable();
            $table->decimal('credit_fee', 10, 2)->nullable();
            $table->decimal('misc_fee', 10, 2)->nullable();
            $table->decimal('other_fee', 10, 2)->nullable();
            $table->decimal('total_premium', 10, 2)->nullable();
             $table->decimal('comission', 10, 2)->nullable();
            $table->decimal('business_comission', 10, 2)->nullable();
            $table->decimal('renewal_comission', 10, 2)->nullable();
            $table->timestamps();
        
            $table->foreign('carrier_info_id')
                  ->references('id')
                  ->on('carrier_info')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrier_products');
    }
};
