<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CodeDoctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('code_doctor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code_id')->unsigned();
            $table->integer('doctor_id')->unsigned();
        });
    }
}
