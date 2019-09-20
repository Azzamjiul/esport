<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('game_id');
            $table->string('account_name');
            $table->string('full_name');
            $table->string('identity_card')->default('noimage.png');
            $table->integer('fk_team_id');
            $table->integer('validation_status')->default(0);
            $table->integer('fk_operator_id')->default(null);
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
        Schema::dropIfExists('team_detail');
    }
}
