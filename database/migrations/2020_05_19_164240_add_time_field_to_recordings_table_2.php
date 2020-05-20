<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimeFieldToRecordingsTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('recordings', function (Blueprint $table) {
             $table->string('time')->nullable();
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('recordings', function (Blueprint $table) {
             $table->dropColumn('time');
         });
     }
}
