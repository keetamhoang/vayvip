<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatfuelCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatfuel_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('birthday')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('salary')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('chatfuel_customers');
    }
}
