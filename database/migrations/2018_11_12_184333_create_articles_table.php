<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('title');
            $table->string('slug');
            $table->boolean('published');
            $table->dateTime('published_date')->nullable();
            $table->integer('revision_id')->unsigned();
            $table->foreign('revision_id')->references('id')->on('article_revisions');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     *s Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
