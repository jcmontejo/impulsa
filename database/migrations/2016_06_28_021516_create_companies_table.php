<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('tradename');
            $table->string('business_name');
            $table->string('rfc');
            $table->string('turn');
            $table->string('manager');
            $table->string('contact');
            $table->string('position');
            $table->string('location');
            $table->string('phone');
            $table->string('cell');
            $table->string('email');
            $table->string('web');
            $table->string('business_address');
            $table->string('street');
            $table->string('colony');
            $table->string('city');
            $table->string('postal');
            $table->string('telephone');
            $table->string('country');
            $table->string('state');
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
        Schema::drop('companies');
    }
}
