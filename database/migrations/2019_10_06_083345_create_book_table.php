<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //$table->increments('id');
            //$table->timestamps();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->integer('year')->nullable();
            $table->float('price')->nullable();
            $table->string('isbn')->nullable();
            $table->integer('author_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('photo')->nullable();
            $table->integer('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
