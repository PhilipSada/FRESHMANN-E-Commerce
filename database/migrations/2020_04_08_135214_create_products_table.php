<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('image_url_1');
            $table->text('image_url_2');
            $table->text('fit_1')->nullable();
            $table->string('fit_2')->nullable();
            $table->string('size_1')->nullable();
            $table->string('size_2')->nullable();
            $table->string('size_3')->nullable();
            $table->string('size_4')->nullable();
            $table->string('brand');
            $table->string('colour');
            $table->string('featured')->nullable();
            $table->text('description');
            $table->float('price',10,2);
            $table->bigInteger('quantity');
            $table->bigInteger('category_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('products', function (Blueprint $table){
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
