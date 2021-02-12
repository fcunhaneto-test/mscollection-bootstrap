<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cast_series', function (Blueprint $table) {
            $table->unsignedInteger('cast_id');
            $table->unsignedInteger('series_id');
            $table->unsignedTinyInteger('order')->default(1);

            $table->primary(['cast_id', 'series_id']);

            $table->foreign('cast_id')->on('cast')->references('id')
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
        Schema::dropIfExists('cast_series');
    }
}
