<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holes', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('Number');
            $table->integer('Par');
            $table->integer('Distance');
            $table->integer('Handicap');
            $table->string('Picture');
            $table->string('Description');

            $table->integer('CourseID')->unsigned()->nullable();
            $table->foreign('CourseID')->references('CourseID')->on('courses');

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
        Schema::dropIfExists('holes');
    }
}
