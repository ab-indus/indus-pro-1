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
        Schema::create('general_lead', function (Blueprint $table) {
            $table->id();
            $table->string('agent_name')->nullable(); // Storing agent name
            $table->string('contact_medium')->nullable(); // Storing contact medium
            $table->string('last_name')->nullable(); // Storing last name
            $table->string('first_name')->nullable(); // Storing first name
            $table->string('contact_number')->nullable(); // Storing phone number
            $table->text('question')->nullable(); // Storing question (nullable)
            $table->text('notes')->nullable(); // Storing notes (nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_lead');
    }
};
