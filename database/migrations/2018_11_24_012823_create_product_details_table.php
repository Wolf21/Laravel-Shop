<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity')->default(100);
            $table->string('cpu');
            $table->string('ram');
            $table->string('screen');
            $table->string('vga');
            $table->string('storage');
            $table->string('extend_memory');
            $table->string('cam1');
            $table->string('cam2');
            $table->string('sim');
            $table->string('connect');
            $table->string('pin');            
            $table->string('os');            
            $table->text('note');            
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');;
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
        Schema::drop('pro_details');
    }
}
