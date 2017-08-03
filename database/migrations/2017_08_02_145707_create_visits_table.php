<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('visits', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('patient_id');
    $table->foreign('patient_id')->references('id')->on('patients');
    $table->string('title');
    $table->string('symptoms');
    $table->string('diagnosis');
    $table->string('treatment');
    $table->string('notes');
    $table->date('visit_date'); 
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
        Schema::dropIfExists('visits');
    }
}
