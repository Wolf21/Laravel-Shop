<?php

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
            $table->increments('new_id');
            $table->string('title');
            $table->string('slug');
            $table->string('author');            
            $table->string('intro');
            $table->text('full');
            $table->text('images');
            $table->integer('status');
            $table->text('source');
            $table->text('tag');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('categories')->onDelete('cascade');
            $table->integer('created_uid')->default(1);
            $table->integer('updated_uid')->default(1);
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
