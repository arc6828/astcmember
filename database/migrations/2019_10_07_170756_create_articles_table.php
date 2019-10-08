<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('prapet');
            $table->string('group');
            $table->string('name_th')->nullable();
            $table->string('name_en')->nullable();
            $table->string('purubpitshop')->nullable();
            $table->string('email')->nullable();
            $table->string('name_present')->nullable();
            $table->string('name_aj')->nullable();
            $table->integer('tel_aj')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
