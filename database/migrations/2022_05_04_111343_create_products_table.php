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
            $table->integer('category_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('image')->default('default_Product.png');
            $table->double('purchase_price', 8, 2);
            $table->double('sale_price', 8, 2);
            $table->integer('stock');
            $table->boolean('status')->default(false);
            $table->double('vote', 8, 2);
            $table->bigInteger('vote_count');
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
