<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIllustrationTagTable extends Migration
{
    public function up()
    {
        Schema::create('illustration_tag', function(Blueprint $table){
            $table->integer('illustration_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('illustration_id')->references('id')->on('illustrations')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->primary(['illustration_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('illustration_tag');
    }
}
