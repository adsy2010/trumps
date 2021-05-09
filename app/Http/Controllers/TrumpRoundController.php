<?php

namespace App\Http\Controllers;

use App\Models\TrumpCardStat;
use App\Models\TrumpGame;
use App\Models\TrumpGamePlayer;
use App\Models\TrumpGamePlayerCard;
use App\Models\TrumpPlayer;
use App\Models\TrumpRound;
use App\Models\TrumpRoundCard;
use App\Models\TrumpStatType;
use Illuminate\Http\Request;

class TrumpRoundController extends Controller
{
    public function show(Request $request, TrumpRound $trumpRound): TrumpRound
    {
        return $trumpRound;
    }

    public function startRound(TrumpGame $game)
    {
        //Fetch existing rounds
        $game->load('rounds');
        $totalRounds = $game->rounds->count();


        $trumpRound = TrumpRound::create([
            'trump_game_id' => $game->id,
            'round_number' => $totalRounds + 1
        ]);

        return $trumpRound;
    }

    public function prepareRoundCards(TrumpGame $game, TrumpRound $trumpRound)
    {
        $playerCards = [];

        //Get all game players and load their card stacks
        foreach ($game->players as $gamePlayer) {

            $playerCards[$gamePlayer->id] = TrumpGamePlayerCard::where('trump_player_id', '=', $gamePlayer->id)
                ->where('trump_game_id', '=', $game->id)
                ->get();

        }


        foreach ($playerCards as $playerId => $gamePlayerCards) {

            //Check if the players card stack has any cards left
            if($gamePlayerCards->count() > 0) {

                //Shuffle the cards and get the first card
                $playerCard = $gamePlayerCards->shuffle()->first();

                //Place the shuffled selected card into the round
                TrumpRoundCard::create([
                    'trump_round_id' => $trumpRound->id,
                    'trump_player_id' => $playerId,
                    'trump_card_id' => $playerCard->id,
                ]);

            }


        }
    }

    public function setRoundCardStat(TrumpRound $trumpRound, TrumpStatType $trumpStatType): TrumpRound
    {
        $trumpRound->trump_stat_type_id = $trumpStatType->id;
        $trumpRound->save();

        $this->determineWinner();

        return $trumpRound;
    }

    public function determineWinner(TrumpRound $trumpRound)
    {
        $trumpRound->
    }

    public function endRound(TrumpRound $round, TrumpPlayer $trumpPlayer): TrumpRound
    {
        $round->winner_id = $trumpPlayer->id;
        $round->save();

        return $round;
    }
}
