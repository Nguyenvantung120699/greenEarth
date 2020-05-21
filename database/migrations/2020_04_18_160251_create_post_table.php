<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',191)->unique();
            $table->string('author');
            $table->string('slug');
            $table->string("image");
            $table->text("short_desc");
            $table->text('content');
            $table->tinyInteger('status')->default(1);   
            $table->unsignedInteger('count_views')->default(0);
            $table->unsignedInteger('count_like')->default(0);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}

