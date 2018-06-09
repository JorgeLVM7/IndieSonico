<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popups', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->mediumText('description')->nullable();
            $table->string('path')->nullable();
            $table->text('video')->nullable();
            $table->text('comment')->nullable();
            $table->string('category')->nullable();
            $table->longText('bonus')->nullable();


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
        Schema::dropIfExists('popups');

    }
}
