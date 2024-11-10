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
        Schema::table('payment_policy', function (Blueprint $table) {
            $table->string('payment_for')->nullable();
            $table->string('policy_number')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payment_policy', function (Blueprint $table) {
            $table->dropColumn('payment_for');
            $table->dropColumn('policy_number');

        });
    }
};
