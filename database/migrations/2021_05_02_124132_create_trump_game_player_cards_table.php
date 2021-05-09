<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrumpGamePlayerCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trump_game_player_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trump_card_id');
            $table->foreignId('trump_player_id');
            $table->foreignId('trump_game_id');
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
        Schema::dropIfExists('trump_game_player_cards');
    }
}
