<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('date');
            $table->string('name');
            $table->string('last_name');
            $table->string('carrer');
            $table->string('institution');
            $table->string('age');
            $table->string('sex');
            $table->string('status');
            $table->string('address');
            $table->string('birthdate');
            $table->string('experience');
            $table->string('phone');
            $table->string('email');
            $table->string('testing');
            $table->string('zavic');
            $table->string('htp');
            $table->string('autobiografia');
            $table->string('terman');
            $table->string('cleaver');
            $table->string('machover');
            $table->string('diez');
            $table->string('kostick');
            $table->string('tat');
            $table->string('veinte');
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
        Schema::drop('evaluations');
    }
}
