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

        Schema::create('carrier_policies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrier_info_id');
            $table->string('status');
            $table->string('policy_number')->nullable();
            $table->string('policy_type')->nullable();
            $table->string('policy_term')->nullable();
            $table->string('base_premium')->nullable();
            $table->decimal('total_premium', 10, 2)->nullable();
            $table->date('date_due')->nullable();
            $table->decimal('amount_due', 10, 2)->nullable();
            $table->date('date_paid')->nullable();
            $table->decimal('amount_paid', 10, 2)->nullable();
            $table->date('commission_due')->nullable();
            $table->integer('new_amount_due')->nullable();
            $table->date('new_due_date')->nullable();
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
        Schema::dropIfExists('carrier_policies');
    }
};
