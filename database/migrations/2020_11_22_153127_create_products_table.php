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
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->double('price');
            $table->foreignId('supplier_id')->constrained();
//            $table->foreignId('category_id')->constrained('product_categories');
            $table->integer('quantity');
            $table->double('size');
            $table->string('color');
            $table->integer('discount');
            $table->integer('rating');
            $table->string('smallPictureURL');
            $table->string('largePictureURL');
            $table->timestamp('addedDate');
            $table->boolean('inTopPage');
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
        Schema::dropIfExists('products');
    }
}
