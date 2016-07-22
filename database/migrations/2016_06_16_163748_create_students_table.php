<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('place');
            $table->string('sex');
            $table->string('email');
            $table->string('civil_status');
            $table->string('phone');
            /*Residence*/
            $table->string('address');
            $table->string('post_code');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('travel');
            $table->string('relocation');
            /*Extras*/
            $table->string('licence');
            $table->string('car');
            $table->string('title');
            $table->string('description');
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
        Schema::drop('students');
    }
}
