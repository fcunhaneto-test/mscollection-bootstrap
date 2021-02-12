<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director_movie', function (Blueprint $table) {
            $table->unsignedInteger('director_id');
            $table->unsignedInteger('movie_id');
            $table->unsignedTinyInteger('order')->default(1);

            $table->primary(['director_id', 'movie_id']);

            $table->foreign('director_id')->on('directors')->references('id')
                ->onDelete('cascade');
            $table->foreign('movie_id')->on('movies')->references('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('director_movie');
    }
}
