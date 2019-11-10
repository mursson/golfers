<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Date');
            $table->string('Weather')->nullable();

            $table->integer('CompetitionID')->unsigned()->nullable();
            $table->foreign('CompetitionID')->references('id')->on('competitions');

            $table->integer('CourseID')->unsigned()->nullable();
            $table->foreign('CourseID')->references('id')->on('courses');
            
            $table->integer('Player1')->unsigned()->nullable();
            $table->foreign('Player1')->references('id')->on('users');

            $table->integer('Player2')->unsigned()->nullable();
            $table->foreign('Player2')->references('id')->on('users');

            $table->integer('Player3')->unsigned()->nullable();
            $table->foreign('Player3')->references('id')->on('users');            

            $table->integer('Player4')->unsigned()->nullable();
            $table->foreign('Player4')->references('id')->on('users');  


            $table->integer('RoundPlayer1')->unsigned()->nullable();
            $table->foreign('RoundPlayer1')->references('id')->on('rounds');

            $table->integer('RoundPlayer2')->unsigned()->nullable();
            $table->foreign('RoundPlayer2')->references('id')->on('rounds');

            $table->integer('RoundPlayer3')->unsigned()->nullable();
            $table->foreign('RoundPlayer3')->references('id')->on('rounds');            

            $table->integer('RoundPlayer4')->unsigned()->nullable();
            $table->foreign('RoundPlayer4')->references('id')->on('rounds');  

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
        Schema::dropIfExists('matches');
    }
}
