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
        Schema::create('carrier_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrier_info_id');
            $table->text('note_content')->nullable();
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
        Schema::dropIfExists('carrier_notes');
    }
};
