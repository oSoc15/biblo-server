<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LikeTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('likes', function(Blueprint $table){
              $table->increments('id');
              $table->boolean('liked');
              $table->timestamps('created_at');
              $table->integer('illustration_id')->unsigned();
              $table->foreign('illustration_id')->references('id')->on('illustrations')->onDelete('cascade');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('likes');
    }
}
