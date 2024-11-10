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
        Schema::create('client_pays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('preferred_name')->nullable();
            $table->string('carrier')->nullable();
            $table->string('policy_number')->nullable();
            $table->string('type_of_policy')->nullable();
            $table->date('due_date')->nullable();
            $table->decimal('amount_due', 10, 2)->nullable();
            $table->decimal('amount_paid_cc', 10, 2)->nullable();
            $table->decimal('amount_paid_cash', 10, 2)->nullable();
            $table->decimal('direct_pay', 10, 2)->nullable();
            $table->string('name_on_card')->nullable();
            $table->string('debit_card')->nullable();
            $table->string('number_1st_4', 4)->nullable();
            $table->string('number_2nd_4', 4)->nullable();
            $table->string('number_3rd_4', 4)->nullable();
            $table->string('number_4th_4', 4)->nullable();
            $table->string('expiration_1', 2)->nullable();
            $table->string('expiration_2', 4)->nullable();
            $table->string('billing_zip')->nullable();
            $table->string('cvc', 3)->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('ssn')->nullable();
            $table->string('zip')->nullable();
            $table->string('type_of_id')->nullable();
            $table->string('dl_id')->nullable();
            $table->integer('insured_items')->nullable();
            $table->integer('insured_drivers')->nullable();
            $table->integer('excluded_drivers')->nullable();
            $table->string('lien')->nullable();
            $table->date('effective_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->integer('term_months')->nullable();
            $table->decimal('base_premium', 10, 2)->nullable();
            $table->decimal('state_fee_mvca', 10, 2)->nullable();
            $table->decimal('policy_fee', 10, 2)->nullable();
            $table->decimal('roadside_assistance_fee', 10, 2)->nullable();
            $table->decimal('sr22', 10, 2)->nullable();
            $table->decimal('other_fee', 10, 2)->nullable();
            $table->decimal('total_premium', 10, 2)->nullable();
            $table->decimal('annual_premium', 10, 2)->nullable();
            $table->string('status')->nullable();
            
            $table->timestamps();

            $table->unsignedBigInteger('policy_id')->nullable();
            $table->foreign('policy_id')->references('id')->on('policy_new')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_pays');
    }
};
