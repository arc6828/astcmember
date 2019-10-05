<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('sex');
            $table->string('title');
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('status');
            $table->string('statusothers')->nullable();
            $table->string('food');
            $table->string('school')->nullable();
            $table->string('major')->nullable();
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('postnumber')->nullable();
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
            $table->string('fileregister')->nullable();
            $table->string('bill_school')->nullable();
            $table->string('bill_major')->nullable();
            $table->string('bill_address')->nullable();
            $table->string('bill_district')->nullable();
            $table->string('bill_subdistrict')->nullable();
            $table->string('bill_postnumber')->nullable();
            $table->string('bill_tel')->nullable();
            $table->string('bill_fax')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
