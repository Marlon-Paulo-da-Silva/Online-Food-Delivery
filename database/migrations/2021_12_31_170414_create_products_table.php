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
            $table->bigIncrements('product_id');
            $table->foreignId('category_id');
            $table->string('product_name');
            $table->longText('product_detail');
            $table->text('product_image');
            $table->integer('product_status');
            $table->string('full')->nullable();
            $table->float('full_price', 10, 2)->nullable();
            $table->string('half')->nullable();
            $table->float('half_price', 10, 2)->nullable();

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
