<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_customers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('type')->nullable();
            $table->integer('status')->default(0);
            $table->string('name')->nullable();
            $table->string('birthday')->nullable();
            $table->string('region')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('salary')->default(0);
            $table->text('note')->nullable();

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
        Schema::dropIfExists('bank_customers');
    }
}
