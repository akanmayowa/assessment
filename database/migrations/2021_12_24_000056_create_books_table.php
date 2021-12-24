<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
  
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('isbn');
            $table->text('authors');
            $table->string('country');
            $table->integer('number_of_pages');
            $table->text('publisher');
            $table->date('release_date');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('books');
    }
}