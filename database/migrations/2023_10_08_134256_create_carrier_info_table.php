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
        Schema::create('carrier_info', function (Blueprint $table) {
            $table->id();
            $table->string('display_name');
            $table->string('type');
            $table->string('agent_code')->nullable();
            $table->string('agent_url')->nullable();
            $table->string('user_id')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('main_email')->nullable();
            $table->date('eo_date')->nullable();
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
        Schema::dropIfExists('carrier_info');
    }
};
