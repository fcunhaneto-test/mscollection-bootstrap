<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_series', function (Blueprint $table) {
            $table->unsignedTinyInteger('media_id');
            $table->unsignedInteger('series_id');
            $table->boolean('active')->default(true);
            $table->softDeletes();

            $table->primary(['media_id', 'series_id']);

            $table->foreign('media_id')->on('media')->references('id')
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
        Schema::dropIfExists('media_series');
    }
}
