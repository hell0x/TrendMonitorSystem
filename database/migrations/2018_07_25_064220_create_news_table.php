<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('news_url')->comment('新闻url');
            $table->integer('source_id')->comment('来源id');
            $table->integer('column_id')->comment('栏目id');
            $table->tinyInteger('news_type')->comment('新闻类型 (1:普通新闻 2：头条新闻 etc..)');
            $table->integer('media_id')->comment('媒体id');
            $table->string('author')->comment('作者');
            $table->integer('region')->nullable()->comment('地区');
            $table->string('title')->comment('标题');
            $table->string('subhead')->nullable()->comment('副标题');
            $table->text('introduction')->nullable()->comment('导读');
            $table->text('introduction_html')->nullable()->comment('导读html');
            $table->text('content')->nullable()->comment('内容');
            $table->text('content_html')->nullable()->comment('内容html');
            $table->integer('hits')->nullable()->comment('点击数');
            $table->integer('comments')->nullable()->comment('评论数');
            $table->timestamp('news_time')->comment('新闻日期');
            $table->boolean('status')->default(true)->comment('状态');
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
        Schema::drop('news');
    }
}
