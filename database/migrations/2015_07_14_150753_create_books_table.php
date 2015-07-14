<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table){
    			$table->string('id');
    			$table->string('title');
          $table->string('author');
          $table->string('isbn');
          $table->string('languages');
          $table->string('genres');
          $table->string('summary');

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
        Schema::drop('books');
    }
}
