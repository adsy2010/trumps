<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrumpGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trump_games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trump_game_status_id');
            $table->foreignId('trump_set_id');
            $table->foreignId('trump_player_id'); //started by
            $table->string('password')->nullable();
            $table->integer('max_players')->default(4);
            $table->foreignId('winner_id')->nullable();
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
        Schema::dropIfExists('trump_games');
    }
}
