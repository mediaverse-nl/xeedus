<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('catogory_id')->unsigned();
            $table->foreign('catogory_id')->references('id')->on('category');
            $table->string('name');
            $table->string('video_key');
            $table->string('thumbnail');
            $table->string('tietel');
            $table->string('beschrijving');
            $table->string('prijs');
            $table->string('level');
            $table->string('status');
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
        Schema::drop('Videos');
    }
}
