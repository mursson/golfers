<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScorecardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorecards', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->integer('Score');

            $table->integer('PlayerID')->unsigned()->nullable();
            $table->foreign('PlayerID')->references('id')->on('users');

            $table->integer('RoundID')->unsigned()->nullable();
            $table->foreign('RoundID')->references('RoundID')->on('rounds');

            $table->integer('HoleID')->unsigned()->nullable();
            $table->foreign('HoleID')->references('HoleID')->on('holes');            
            
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
        Schema::dropIfExists('scorecards');
    }
}
