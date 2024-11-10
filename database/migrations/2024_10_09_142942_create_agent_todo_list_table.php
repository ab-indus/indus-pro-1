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
        Schema::create('AgentTODOList', function (Blueprint $table) {
            $table->id();
            $table->string('medium_of_contact');
            $table->boolean('done')->default(false)->nullable();

            $table->date('done_date')->nullable();
            $table->time('done_time')->nullable();
            $table->string('reason_of_contact')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();



            $table->string('agent');
            $table->string('contact_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('office_hours_address')->nullable();
            $table->boolean('lien_holder_confirmation')->default(false)->nullable();
            $table->text('premium_due_info')->nullable();
            $table->text('quote')->nullable();
            $table->text('collect_rating_info')->nullable();
            $table->boolean('add_new_policy')->default(false)->nullable();
            $table->boolean('make_payment')->default(false)->nullable();
            $table->boolean('policy_change')->default(false)->nullable();
            $table->date('appointment_date')->nullable();
            $table->time('appointment_time')->nullable();
            $table->string('office')->nullable();
            $table->string('call')->nullable();
            $table->text('notes')->nullable();
            $table->string('doc_save')->nullable();
            $table->string('proof_upload')->nullable();
            $table->string('picture_upload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('AgentTODOList');
    }
};
