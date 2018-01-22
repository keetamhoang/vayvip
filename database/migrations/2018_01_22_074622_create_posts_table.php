<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nulltable();
            $table->string('short_desc')->nulltable();
            $table->text('content')->nulltable();
            $table->text('form')->nulltable();
            $table->integer('categogry_id')->default(0);
            $table->integer('account_id')->default(0);
            $table->integer('status')->default(0);
            $table->integer('type')->default(0);
            $table->integer('is_highlight')->default(0);

            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nulltable();
            $table->string('desc')->nulltable();
            $table->integer('parent_id')->default(0);
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
        Schema::dropIfExists('posts');
        Schema::dropIfExists('categories');
    }
}
