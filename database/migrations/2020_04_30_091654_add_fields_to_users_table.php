<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('image')->default('image.png');
            $table->string('mobile_tel')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('references')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('mobile_tel');
            $table->dropColumn('bio');
            $table->dropColumn('references');
            $table->dropColumn('zip');
            $table->dropColumn('country');
        });
    }
}
