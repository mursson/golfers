<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('Name',100);
            $table->integer('HoleCount');
            $table->integer('Par');
            $table->integer('Rating');
            $table->integer('BogeyRating');
            $table->string('Location',100);
            $table->string('Description',1000);
            $table->string('Map');
            $table->string('Logo');

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
        Schema::dropIfExists('courses');
    }
}
