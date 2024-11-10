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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("ins_company")->nullable();
            $table->string("policy_num")->nullable();
            $table->string("year")->nullable();
            $table->string("make")->nullable();
            $table->string("model")->nullable();
            $table->string("vin_num")->nullable();
            $table->date("effective_date")->nullable();
            $table->date("exp_date")->nullable();
            $table->integer("next_amount_due")->nullable();
            $table->date("due_date")->nullable();
            $table->string("add_vehicle")->nullable();


            // $table->string('display_name')->nullable();
            // $table->string('state')->nullable();
            // $table->string('carrier')->nullable();
            // $table->string('product_name')->nullable();
            // $table->string('agent_type')->nullable();
            // $table->string('agency')->nullable();
            // $table->string('in_house_agent')->nullable();
            // $table->string('downline')->nullable();
            // $table->string('referral')->nullable();
            // $table->string('agent_level')->nullable();
            // $table->string('line_of_business')->nullable();
            // $table->string('notes')->nullable();
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
        Schema::dropIfExists('products');
    }
};
