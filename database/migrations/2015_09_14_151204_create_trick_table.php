<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tricks', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('category_id')->unsigned()->nullable();
        $table->foreign('category_id')->references('id')->on('categories');
        $table->string('name');
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
        Schema::drop('tricks');
    }
}
