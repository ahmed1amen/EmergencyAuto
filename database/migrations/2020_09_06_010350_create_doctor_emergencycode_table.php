<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorEmergencycodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_emergencycode', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('emergencycode_id')->unsigned();
            $table->unsignedBigInteger('doctor_id')->unsigned();

            $table->foreign('emergencycode_id')->references('id')->on('emergency_codes')->cascadeOnDelete();
            $table->foreign('doctor_id')->references('id')->on('doctors')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_emergencycode');
    }
}
