<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->foreign('source_id')->references('id')->on('sources')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('news', function (Blueprint $table) {
            $table->foreign('column_id')->references('id')->on('columns')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('news', function (Blueprint $table) {
            $table->foreign('origin')->references('code')->on('origins')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('news_keyword', function (Blueprint $table) {
            $table->foreign('news_id')->references('id')->on('news')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('news_keyword', function (Blueprint $table) {
            $table->foreign('keyword_id')->references('id')->on('keywords')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function(Blueprint $table) {
            $table->dropForeign('news_source_id_foreign');
        });
        Schema::table('news', function(Blueprint $table) {
            $table->dropForeign('news_column_id_foreign');
        });
        Schema::table('news', function(Blueprint $table) {
            $table->dropForeign('news_origin_foreign');
        });
        Schema::table('news_keyword', function(Blueprint $table) {
            $table->dropForeign('news_keyword_news_id_foreign');
        });
        Schema::table('news_keyword', function(Blueprint $table) {
            $table->dropForeign('news_keyword_keyword_id_foreign');
        });
    }
}
