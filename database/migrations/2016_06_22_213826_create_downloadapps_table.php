<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloadapps', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('category');
          $table->string('link');
          $table->string('description');
          $table->string('cover');
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
        Schema::drop('downloadapps');
    }
}
