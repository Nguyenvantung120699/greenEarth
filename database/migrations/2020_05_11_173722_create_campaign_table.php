<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("campaign_name");
            $table->string("campaign_slug");
            $table->unsignedInteger("status")->default(0);
            $table->date("start_date");
            $table->date("end_date")->nullable();
            $table->string("image");
            $table->text("content");
            $table->string("target");
            $table->string("organizational_units");
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
        Schema::dropIfExists('campaign');
    }
}
