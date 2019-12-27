<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReceivedToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('received_at')->nullable();
            $table->string('checkformat_at')->nullable();
            $table->string('waitmodifyformat_at')->nullable();
            $table->string('consider_at')->nullable();
            $table->string('past_modify_at')->nullable();
            $table->string('waitmodify_at')->nullable();
            $table->string('past_at')->nullable();
            $table->string('notpast_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
