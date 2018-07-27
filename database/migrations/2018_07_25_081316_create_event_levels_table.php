<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_level')->comment('级别名称');
            $table->tinyInteger('level')->comment('重要性等级');
            $table->float('score', 5, 2)->comment('达到该级别分数(100,90,80,70,60,50,<40)');
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
        Schema::dropIfExists('event_levels');
    }
}
