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
        Schema::create('product_new', function (Blueprint $table) {
            $table->id();
            $table->string('display_name')->nullable();
            $table->string('state')->nullable();
            $table->string('carrier')->nullable();
            $table->string('product_name')->nullable();
            $table->string('agent_type')->nullable();
            $table->string('agency')->nullable();
            $table->string('in_house_agent')->nullable();
            $table->string('downline')->nullable();
            $table->string('referral')->nullable();
            $table->string('agent_level')->nullable();
            $table->string('line_of_business')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_new');
    }
};
