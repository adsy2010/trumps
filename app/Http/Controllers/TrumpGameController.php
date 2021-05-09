<?php

namespace App\Http\Controllers;

use App\Models\TrumpGame;
use App\Models\TrumpGamePlayer;
use App\Models\TrumpGamePlayerCard;
use App\Models\TrumpGameStatus;
use App\Models\TrumpPlayer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TrumpGameController extends Controller
{

    /**
     * @return mixed
     */
    public function index()
    {
        return TrumpGame::whereNull('winner_id')->get();
    }

    /**
     * @param Request $request
     * @param TrumpGame $game
     * @return TrumpGame
     */
    public function show(Request $request, TrumpGame $game): TrumpGame
    {
        return $game;
    }

    /**
     * @param Request $request
     * @return TrumpGame
     */
    public function store(Request $request): TrumpGame
    {
        $game = new TrumpGame;
        $game->fill($request->all());
        $game->trump_game_status_id = TrumpGameStatus::LOBBY;
        $game->save();
        return $game;
    }

    /**
     * @param Request $request
     * @param TrumpGame $game
     * @return TrumpGame
     */
    public function update(Request $request, TrumpGame $game): TrumpGame
    {
        $game->fill($request->all());
        $game->save();
        return $game;
    }

    /**
     * @param Request $request
     * @param TrumpGame $game
     * @return TrumpGame
     */
    public function delete(Request $request, TrumpGame $game): TrumpGame
    {
        $game->delete();
        return $game;
    }

    /**
     * @param TrumpGame $game
     * @return TrumpGame
     */
    public function startGame(TrumpGame $game): TrumpGame
    {
        Log::info('Attempted game start for game ID: '.$game->id);

        //Check if game is in lobby state
        if($game->trump_game_status_id !== TrumpGameStatus::LOBBY) {
            Log::error('Game not in Lobby state');
            return  $game;
        }

        //distribute cards to players
        $cards = $game->set->cards;
        $shuffledCards = $cards->shuffle();
        //$cardsEach = $shuffledCards->count() / $game->players->count();

        $counter = 1;
        //$playerCards = [];
        foreach ($shuffledCards as $card) {
            //dump($game->players[$counter -1]->name);// $counter % $game->players->count();

            //Assign a card to the player
            //$playerCards[$game->players[$counter -1]->id][] = $card;

            $trumpGamePlayerCardArray = [
                'trump_card_id' => $card->id,
                'trump_game_id' => $game->id,
                'trump_player_id' => $game->players[$counter - 1]->id,
            ];

            $trumpGamePlayerCard = new TrumpGamePlayerCard;
            $trumpGamePlayerCard->fill($trumpGamePlayerCardArray);
            $trumpGamePlayerCard->save();

            if ($counter === $game->players->count()) {
                $counter = 1;
            } else {
                $counter++;
            }
        }

        Log::info('Distributed game cards for game ID: '.$game->id);

        $game->trump_game_status_id = TrumpGameStatus::IN_PROGRESS;
        $game->save();

        Log::info('Game now in progress - game ID: '.$game->id);

        return $game;
        //return $playerCards;
    }

    /**
     * @param TrumpGame $game
     * @param TrumpPlayer $trumpPlayer
     */
    public function endGame(TrumpGame $game, TrumpPlayer $trumpPlayer): TrumpGame
    {
        $game->winner_id = $trumpPlayer->id;
        $game->trump_game_status_id = TrumpGameStatus::COMPLETE;
        $game->save();
        return $game;
    }

    /**
     * @param TrumpGame $game
     * @param TrumpPlayer $trumpPlayer
     * @return TrumpGamePlayer
     */
    public function joinGame(TrumpGame $game, TrumpPlayer $trumpPlayer): TrumpGamePlayer
    {
        $gamePlayer = new TrumpGamePlayer;
        $gamePlayer->trump_game_id = $game->id;
        $gamePlayer->trump_player_id = $trumpPlayer->id;
        $gamePlayer->save();

        return $gamePlayer;
    }

    /**
     * @param TrumpGame $game
     * @param TrumpPlayer $trumpPlayer
     */
    public function leaveGame(TrumpGame $game, TrumpPlayer $trumpPlayer): bool
    {
        TrumpGamePlayer::where('trump_game_id', '=', $game->id)
            ->where('trump_player_id', '=', $trumpPlayer->id)
            ->delete();

        return true;
    }
}
