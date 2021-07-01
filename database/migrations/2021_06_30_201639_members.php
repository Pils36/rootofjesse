<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('telephone')->nullable();
            $table->string('address')->nullable();
            $table->string('who_invited_you')->nullable();
            $table->string('status')->nullable();
            $table->string('assigned_staff')->nullable();
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
        Schema::dropIfExists('members');
    }
}
