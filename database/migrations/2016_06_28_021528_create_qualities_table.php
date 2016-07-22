<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('question1');
            $table->string('question2');
            $table->string('question3');
            $table->string('question4');
            $table->string('question5');
            $table->string('question6');
            $table->string('question7');
            $table->string('question8');
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
        Schema::drop('qualities');
    }
}
