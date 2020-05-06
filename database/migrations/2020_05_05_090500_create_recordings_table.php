<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recordings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('audio_file');
            $table->string('video_file')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('style_id')->unsigned()->nullable();
            $table->foreign('style_id')->references('id')->on('styles');
            $table->integer('title_id')->unsigned()->nullable();

            $table->timestamps();
        });

        Schema::table('recordings', function($table) {
           $table->foreign('title_id')->references('id')->on('titles');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recordings');
    }
}
