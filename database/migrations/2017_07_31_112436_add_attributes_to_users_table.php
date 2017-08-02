<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
{
    $table->string('speciality');
    $table->string('mobile');
    $table->string('hospital_name');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
{
    $table->dropColumn('speciality');
    $table->dropColumn('mobile');
    $table->dropColumn('hospital_name');
});
    }
}
