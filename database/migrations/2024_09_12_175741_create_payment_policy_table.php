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
        Schema::create('payment_policy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('policy_id'); // Foreign key to policy_new table
            $table->string('person')->nullable(); // Person name
            $table->string('first_name')->nullable(); // First name
            $table->string('last_name')->nullable(); // Last name
            $table->string('carrier')->nullable(); // Carrier
            $table->string('amount_due')->nullable(); // Amount Due
            $table->date('due_date')->nullable(); // Due Date
            $table->string('new_amount_due')->nullable(); // New Amount Due
            $table->date('new_due_date')->nullable(); // New Due Date
            $table->string('amount_paid_cc')->nullable(); // Amount Paid via Credit Card
            $table->string('amount_paid_cash')->nullable(); // Amount Paid via Cash
            $table->string('direct_pay')->nullable(); // Direct Payment
            $table->string('name_on_card')->nullable(); // Name on Card
            $table->string('debit_card')->nullable(); // Debit Card Type
            $table->string('number_1st_4')->nullable(); // Card Number First 4 digits
            $table->string('number_2nd_4')->nullable(); // Card Number Second 4 digits
            $table->string('number_3rd_4')->nullable(); // Card Number Third 4 digits
            $table->string('number_4th_4')->nullable(); // Card Number Last 4 digits
            $table->string('expiration_1')->nullable(); // Expiration Month
            $table->string('expiration_2')->nullable(); // Expiration Year
            $table->string('billing_zip')->nullable(); // Billing ZIP code
            $table->string('cvc')->nullable(); // CVC
            $table->text('notes')->nullable(); // Additional Notes

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_policy');
    }
};
