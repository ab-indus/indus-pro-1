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
        Schema::create('policy_new', function (Blueprint $table) {
            $table->id();
            $table->string('activeBox')->nullable();
            $table->string('type_of_customer')->nullable();


            $table->string('autopay')->nullable();
            $table->string('new_customer')->nullable();
            $table->string('rewrite')->nullable();
            $table->string('renew')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('preferred_name')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('ssn')->nullable();
            $table->string('zip')->nullable();
            $table->string('type_of_id')->nullable();
            $table->string('dl_id')->nullable();
            $table->string('carrier')->nullable();
            $table->string('policy_number')->nullable();
            $table->string('type_of_policy')->nullable();

            $table->string('insured_items')->nullable();
            $table->string('insured_drivers')->nullable();
            $table->string('excluded_drivers')->nullable();
            $table->string('lien')->nullable();
            
            $table->date('effective_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->integer('term_months')->nullable();
            $table->date('due_date')->nullable();
            $table->string('amount_due')->nullable();
            $table->string('base_premium')->nullable();
            $table->string('state_fee_mvca')->nullable();
            $table->string('policy_fee')->nullable();
            $table->string('roadside_assistance_fee')->nullable();
            $table->string('sr22')->nullable();
            $table->string('other_fee')->nullable();
            $table->string('total_premium')->nullable();
            $table->string('annual_premium')->nullable();
            $table->string('paid_today')->nullable();
            $table->string('amount_paid_cc')->nullable();
            $table->string('amount_paid_cash')->nullable();
            $table->string('direct_pay')->nullable();

            $table->string('name_on_card')->nullable();
            $table->string('debit_card')->nullable();
            $table->string('credit_card_name')->nullable();
            $table->string('number_1st_4')->nullable();
            $table->string('number_2nd_4')->nullable();
            $table->string('number_3rd_4')->nullable();

            $table->string('number_4th_4')->nullable();
            
            $table->string('expiration_1')->nullable();
            $table->string('expiration_2')->nullable();
            $table->string('billing_zip')->nullable();
            $table->string('cvc')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_new');
    }
};
