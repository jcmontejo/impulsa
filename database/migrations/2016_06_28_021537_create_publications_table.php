<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('job');
            $table->string('vacancies');
            $table->string('studies');
            $table->string('sex');
            $table->string('job_type');
            $table->string('days');
            $table->string('age');
            $table->string('requirements');            
            $table->string('company');           
            $table->string('status_civil');
            $table->string('travel');
            $table->string('relocation');
            $table->string('experience');
            $table->string('job_position');
            $table->string('skills');
            $table->string('functions');
            $table->string('state');
            $table->string('city');
            $table->string('salary');
            $table->string('curricular');
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
        Schema::drop('publications');
    }
}
