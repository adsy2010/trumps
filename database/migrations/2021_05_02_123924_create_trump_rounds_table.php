<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrumpRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trump_rounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trump_game_id');
            $table->foreignId('trump_stat_type_id')->nullable();
            $table->foreignId('winner_id')->nullable(); //trump game player
            $table->unsignedInteger('round_number')->default(1);
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
        Schema::dropIfExists('trump_rounds');
    }
}
