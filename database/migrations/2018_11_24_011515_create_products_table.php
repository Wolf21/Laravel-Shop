<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('name');
            $table->string('slug');
            $table->smallInteger('sale')->default(0);
            $table->integer('rate')->default(0);
            $table->smallInteger('deal')->default(0);
            $table->text('images');
            $table->decimal('price', 13, 2);
            $table->integer('status');
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
        Schema::drop('products');
    }
}
