<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingerSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singer_song', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('singer_id')->unsigned();
            $table->foreign('singer_id')->references('id')->on('singers')->onDelete('cascade');
            $table->bigInteger('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('singer_song');
    }
}
