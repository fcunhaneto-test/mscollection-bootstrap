<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatorSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creator_series', function (Blueprint $table) {
            $table->unsignedInteger('creator_id');
            $table->unsignedInteger('series_id');
            $table->unsignedTinyInteger('order')->default(1);

            $table->primary(['creator_id', 'series_id']);

            $table->foreign('creator_id')->on('creators')->references('id')
                ->onDelete('cascade');
            $table->foreign('series_id')->on('series')->references('id')
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
        Schema::dropIfExists('creator_series');
    }
}
