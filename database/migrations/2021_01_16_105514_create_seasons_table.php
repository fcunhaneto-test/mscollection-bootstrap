<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->unsignedInteger('id', 1);
            $table->unsignedInteger('series_id');
            $table->unsignedTinyInteger('season');
            $table->string('year', 4);
            $table->softDeletes();

            $table->unique(['series_id', 'season']);
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
        Schema::dropIfExists('seasons');
    }
}
