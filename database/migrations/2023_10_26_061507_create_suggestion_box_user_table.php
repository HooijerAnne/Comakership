<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */public function up()
    {
        Schema::create('suggestion_box_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('suggestion_box_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('suggestion_box_id')->references('id')->on('suggestion_boxes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('suggestion_box_user');
    }
};
