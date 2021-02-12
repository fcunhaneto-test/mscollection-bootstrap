<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_movie', function (Blueprint $table) {
            $table->unsignedTinyInteger('media_id');
            $table->unsignedInteger('movie_id');
            $table->boolean('active')->default(true);
            $table->softDeletes();

            $table->primary(['media_id', 'movie_id']);

            $table->foreign('media_id')->on('media')->references('id')
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
        Schema::dropIfExists('media_movie');
    }
}
