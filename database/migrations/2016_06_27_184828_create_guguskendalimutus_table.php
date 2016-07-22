<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuguskendalimutusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guguskendalimutus', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('speaker');
          $table->string('day');
          $table->string('cover');
          $table->string('description');
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
        Schema::drop('guguskendalimutus');
    }
}
