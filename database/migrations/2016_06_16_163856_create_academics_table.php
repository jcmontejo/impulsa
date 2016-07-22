<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            /*Posgrado*/
            $table->string('name_posgrado');
            $table->string('school_posgrado');
            $table->string('period_posgrado');
            /*University*/
            $table->string('name_university');
            $table->string('school_university');
            $table->string('period_university');
            /*Preparatory*/
            $table->string('name_preparotory');
            $table->string('school_preparatory');
            $table->string('period_preparatory');
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
        Schema::drop('academics');
    }
}
