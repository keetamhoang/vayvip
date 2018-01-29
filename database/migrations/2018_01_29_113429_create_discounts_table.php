<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aff_link')->nullable();
//            banners
//            categories
            $table->string('content')->nullable();
//            coupons
            $table->string('domain')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->string('root_id')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->string('merchant')->nullable();
            $table->string('name')->nullable();
            $table->timestamp('start_time')->nullable();
            $table->integer('status')->default(0);
            $table->integer('type')->default(0);

            $table->timestamps();
        });

        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('discount_id');
            $table->integer('height')->default(0);
            $table->integer('width')->default(0);
            $table->string('link')->nullable();

            $table->integer('status')->default(0);
            $table->integer('type')->default(0);

            $table->timestamps();
        });

        Schema::create('km_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('discount_id');
            $table->string('category_name')->nullable();
            $table->string('category_name_show')->nullable();
            $table->integer('category_no')->default(0);

            $table->integer('status')->default(0);
            $table->integer('type')->default(0);

            $table->timestamps();
        });

        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('discount_id');
            $table->string('coupon_code')->nullable();
            $table->string('coupon_desc')->nullable();
            $table->string('coupon_save')->nullable();

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
        Schema::dropIfExists('discounts');
        Schema::dropIfExists('km_categories');
        Schema::dropIfExists('banners');
        Schema::dropIfExists('coupons');
    }
}
