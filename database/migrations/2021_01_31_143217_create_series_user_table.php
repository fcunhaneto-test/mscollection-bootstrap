<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_user', function (Blueprint $table) {
            $table->unsignedInteger('series_id');
            $table->unsignedInteger('user_id');
            $table->unsignedTinyInteger('rating');
            $table->text('comment');
            $table->softDeletes();
            $table->timestamps();

            $table->primary(['series_id', 'user_id']);

            $table->foreign('series_id')->on('series')->references('id');
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
        Schema::dropIfExists('series_user');
    }
}
