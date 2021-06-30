<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sermon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('_token')->nullable();
            $table->string('title')->nullable();
            $table->string('post_id')->nullable();
            $table->string('minister')->nullable();
            $table->string('album_art')->nullable();
            $table->string('public_id')->nullable();
            $table->string('message')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('publish')->nullable();
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
        Schema::dropIfExists('sermons');
    }
}
