<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("email");
            $table->string("telephone");
            $table->string("address");
            $table->decimal("donate",12,4);
            $table->text("message")->nullable();
            $table->string("payment_method")->nullable();
            $table->unsignedBigInteger("campaign_id");
            $table->timestamps();

            $table->foreign("campaign_id")->references("id")->on("campaign");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donate');
    }
}