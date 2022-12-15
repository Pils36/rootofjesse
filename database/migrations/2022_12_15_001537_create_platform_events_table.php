<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platform_events', function (Blueprint $table) {
            $table->id();
            $table->string('post_id')->nullable();
            $table->string('name')->nullable();
            $table->string('event_date')->nullable();
            $table->string('location')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('platform_events');
    }
}
