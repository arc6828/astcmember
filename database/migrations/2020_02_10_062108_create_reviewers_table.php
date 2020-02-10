<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('email')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('group')->nullable();
            $table->string('expert')->nullable();
            $table->string('school')->nullable();
            $table->string('major')->nullable();
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->string('amphoe')->nullable();
            $table->string('province')->nullable();
            $table->string('postnumber')->nullable();
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
            $table->string('type')->nullable();
            $table->string('remark')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reviewers');
    }
}
