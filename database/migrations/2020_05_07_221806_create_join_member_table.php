<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("email")->unique();
            $table->string("address");
            $table->string("telephone");
            $table->unsignedBigInteger("post_id");
            $table->string("status")->default(0);
            $table->timestamps();

            $table->foreign("post_id")->references("id")->on("post");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('join_member');
    }
}
