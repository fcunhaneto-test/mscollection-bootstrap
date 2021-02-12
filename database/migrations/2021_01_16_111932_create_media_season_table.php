<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_season', function (Blueprint $table) {
            $table->unsignedTinyInteger('media_id');
            $table->unsignedInteger('season_id');
            $table->boolean('active')->default(true);
            $table->softDeletes();

            $table->primary(['media_id', 'season_id']);

            $table->foreign('media_id')->on('media')->references('id')
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
        Schema::dropIfExists('media_season');
    }
}
