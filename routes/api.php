<?php

use App\Http\Controllers\TrumpGameController;
use App\Http\Controllers\TrumpPlayerController;
use App\Http\Controllers\TrumpSetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('trump')->group(function (){

    Route::prefix('player')->group(function (){
        Route::post('/', [TrumpPlayerController::class, 'store']);
        Route::get('/{trumpPlayer}', [TrumpPlayerController::class, 'show']);
        Route::patch('/{trumpPlayer}', [TrumpPlayerController::class, 'update']);
    });

    Route::prefix('set')->group(function (){
        Route::get('/', [TrumpSetController::class, 'index']);
        Route::post('/', [TrumpSetController::class, 'store']);
        Route::patch('/{trumpSet}', [TrumpSetController::class, 'update']);
        Route::get('/{trumpSet}', [TrumpSetController::class, 'show']);
    });

    Route::get('/game/start/{game}', [TrumpGameController::class, 'startGame']);
    Route::resource('game', TrumpGameController::class)->except(['create', 'edit']);

    Route::prefix('/my')->group(function (){
        Route::get('/games', []);
        Route::get('/games/{game}', []);
    });
});

Route::get('test', function() {
    echo 10 % 1 . '<br>';//0
    echo 10 % 2 . '<br>';//0
    echo 10 % 3 . '<br>';//1
    echo 10 % 4 . '<br>';//2
    echo 10 % 5 . '<br>';//0
    echo 10 % 6 . '<br>';//4
    echo 10 % 7 . '<br>';//3
    echo 10 % 8 . '<br>';//2
    echo 10 % 9 . '<br>';//1
    echo 10 % 10 . '<br>';//0

    echo 1 % 10 . '<br>';//0
    echo 2 % 10 . '<br>';//0
    echo 3 % 10 . '<br>';//1
    echo 4 % 10 . '<br>';//2
    echo 5 % 10 . '<br>';//0
    echo 6 % 10 . '<br>';//4
    echo 7 % 10 . '<br>';//3
    echo 8 % 10 . '<br>';//2
    echo 9 % 10 . '<br>';//1
    echo 10 % 10 . '<br>';//0
});
