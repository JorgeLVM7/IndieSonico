<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnArticlesHead2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles',function (Blueprint $table){
            $table->text('head_2');
            $table->string('path_2');
            $table->mediumText('description_2');
            $table->text('body_2');
            $table->text('video_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles',function (Blueprint $table){
            $table->dropColumn('head_2');
            $table->dropColumn('path_2');
            $table->dropColumn('description_2');
            $table->dropColumn('body_2');
            $table->dropColumn('video_2');
        });
    }
}
