<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voi
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('category_id');
            $table->string('description');
            $table->string('pix1');
            $table->string('pix2')->nullable();
            $table->string('pix3')->nullable();
            $table->string('pix4')->nullable();
            $table->integer('quantity_in_stock')->unsigned();
            $table->integer('unit_price');
            $table->string('discount');
            $table->string('rating');
            $table->string('seller_id');
            $table->string('status');
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
