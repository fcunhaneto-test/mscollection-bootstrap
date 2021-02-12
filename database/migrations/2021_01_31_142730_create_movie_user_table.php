<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_user', function (Blueprint $table) {
            $table->unsignedInteger('movie_id');
            $table->unsignedInteger('user_id');
            $table->unsignedTinyInteger('rating');
            $table->text('comment')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->primary(['movie_id', 'user_id']);

            $table->foreign('movie_id')->on('movies')->references('id');
            $table->foreign('user_id')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_user');
    }
}
