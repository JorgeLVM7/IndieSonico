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

            $table->string('head');
            $table->string('path');
            $table->mediumText('description');
            $table->text('body');
            $table->text('video');

            $table->text('head_2')->nullable();
            $table->string('path_2')->nullable();
            $table->mediumText('description_2')->nullable();
            $table->text('body_2')->nullable();
            $table->text('video_2')->nullable();

            $table->string('category');
            $table->text('autor');
            $table->text('approve');
           // $table->date('date');

            $table->integer('user_id')->unsigned();

            // Relation

            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('articles');
    }
}



