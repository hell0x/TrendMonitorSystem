<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsKeywordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_keyword', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('news_id')->unsigned()->comment('新闻id');
            $table->integer('keyword_id')->unsigned()->comment('关键字id');
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
        Schema::dropIfExists('news_keyword');
    }
}
