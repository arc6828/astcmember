<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticleEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('article_id')->nullable();
            $table->float('evaluation_name')->nullable();
            $table->float('evaluation_abstract')->nullable();
            $table->float('evaluation_introduction')->nullable();
            $table->float('evaluation_methodology')->nullable();
            $table->float('evaluation_result')->nullable();
            $table->float('evaluation_conclusion')->nullable();
            $table->float('evaluation_reference')->nullable();
            $table->float('evaluation_total_score')->nullable();
            $table->string('assessment')->nullable();
            $table->string('evaluation_summary')->nullable();
            $table->text('comment_name')->nullable();
            $table->text('comment_abstract')->nullable();
            $table->text('comment_introduction')->nullable();
            $table->text('comment_methodology')->nullable();
            $table->text('comment_result')->nullable();
            $table->text('comment_conclusion')->nullable();
            $table->text('comment_reference')->nullable();
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
        Schema::drop('article_evaluations');
    }
}
