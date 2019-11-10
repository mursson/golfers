<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rounds', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->smallInteger('NumRonda');
            $table->smallInteger('TotalScore');

           $table->integer('PlayerID')->unsigned()->nullable();
            $table->foreign('PlayerID')->references('id')->on('users');

            $table->integer('MatchID')->unsigned()->nullable();
            $table->foreign('MatchID')->references('id')->on('matches');

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
        Schema::dropIfExists('rounds');
    }
}
