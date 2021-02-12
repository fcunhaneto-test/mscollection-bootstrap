<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cast', function (Blueprint $table) {
            $table->unsignedInteger('id', 1);
            $table->unsignedInteger('actor_id');
            $table->unsignedInteger('character_id');

            $table->unique(['actor_id', 'character_id']);

            $table->foreign('actor_id')->on('actors')->references('id')
                ->onDelete('cascade');
            $table->foreign('character_id')->on('characters')->references('id')
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
        Schema::dropIfExists('cast');
    }
}
