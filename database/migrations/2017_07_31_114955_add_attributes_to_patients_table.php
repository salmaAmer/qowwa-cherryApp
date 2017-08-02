<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributesToPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function(Blueprint $table)
{
    $table->string('doctor_id');
    $table->string('mobile');
    $table->string('name');
    $table->date('date_of_birth');
    $table->string('picture');
    $table->BOOLEAN('is_special_case');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function(Blueprint $table)
{
    $table->dropColumn('doctor_id');
    $table->dropColumn('mobile');
    $table->dropColumn('name');
    $table->dropColumn('date_of_birth');
    $table->dropColumn('picture');
    $table->dropColumn('is_special_case');
    
});
    }
}
