<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrumpCardStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trump_card_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trump_card_id');
            $table->foreignId('trump_stat_type_id');
            $table->float('stat_value');
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
        Schema::dropIfExists('trump_card_stats');
    }
}
