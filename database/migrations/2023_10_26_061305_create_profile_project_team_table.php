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
        Schema::create('profile_project_team', function (Blueprint $table) {
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('project_team_id');

            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->foreign('project_team_id')->references('id')->on('project_teams');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile_project_team');
    }
};
