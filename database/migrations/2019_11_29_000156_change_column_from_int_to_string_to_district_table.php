<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnFromIntToStringToDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('districts', function (Blueprint $table) {
            //
            $table->string('district')->nullable()->change();
            $table->string('amphoe')->nullable()->change();
            $table->string('province')->nullable()->change();
            $table->string('zipcode')->nullable()->change();
            $table->string('district_code')->nullable()->change();
            $table->string('amphoe_code')->nullable()->change();
            $table->string('province_code')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('districts', function (Blueprint $table) {
            //
        });
    }
}
