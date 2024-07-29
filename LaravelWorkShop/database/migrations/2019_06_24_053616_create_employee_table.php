<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EmployeeTable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Full_Name');
            $table->string('Email');
            $table->string('Mobile');
            $table->string('City');
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
        Schema::drop('EmployeeTable');
    }
}
