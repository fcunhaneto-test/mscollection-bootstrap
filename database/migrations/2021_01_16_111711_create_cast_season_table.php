<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cast_season', function (Blueprint $table) {
            $table->unsignedInteger('cast_id');
            $table->unsignedInteger('season_id');
            $table->unsignedTinyInteger('order')->default(1);

            $table->primary(['cast_id', 'season_id']);

            $table->foreign('cast_id')->on('cast')->references('id')
                ->onDelete('cascade');
            $table->foreign('season_id')->on('seasons')->references('id')
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
        Schema::dropIfExists('cast_season');
    }
}
