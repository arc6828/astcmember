<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSummaryEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summary_evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('article_id')->nullable();
            $table->integer('article_evaluation_id')->nullable();
            $table->integer('summary_average_score')->nullable();
            $table->integer('summary_total_score')->nullable();
            $table->text('nwecomment_name')->nullable();
            $table->text('nwecomment_abstract')->nullable();
            $table->text('nwecomment_introduction')->nullable();
            $table->text('nwecomment_methodology')->nullable();
            $table->text('nwecomment_result')->nullable();
            $table->text('nwecomment_conclusion')->nullable();
            $table->text('nwecomment_reference')->nullable();
            $table->string('evaluation_summary');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('summary_evaluations');
    }
}
