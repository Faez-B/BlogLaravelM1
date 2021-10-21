<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post')->index();
            $table->unsignedBigInteger('category')->index();
            $table->foreign("post")
                    ->references('id')
                    ->on("posts")
            ;

            $table->foreign("category")
                    ->references('id')
                    ->on("categories")
            ;


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_categories');
    }
}
