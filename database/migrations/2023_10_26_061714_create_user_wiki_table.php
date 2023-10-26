<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_wiki', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wiki_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('wiki_id')->references('id')->on('wikis');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_wiki');
    }
};
