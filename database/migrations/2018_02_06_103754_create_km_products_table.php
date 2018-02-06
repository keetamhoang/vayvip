<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKmProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('km_products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('aff_link')->nullable();
            $table->string('brand')->nullable();
            $table->string('category_id')->nullable();
            $table->string('category_name')->nullable();
            $table->text('desc')->nullable();
            $table->text('image')->nullable();
            $table->text('link')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_id')->nullable();
            $table->text('short_desc')->nullable();

            $table->integer('status')->default(0);
            $table->integer('type')->default(0);

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
        Schema::dropIfExists('km_products');
    }
}
