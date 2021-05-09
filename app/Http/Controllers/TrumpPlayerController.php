<?php

namespace App\Http\Controllers;

use App\Models\TrumpPlayer;
use Illuminate\Http\Request;

class TrumpPlayerController extends Controller
{
    /**
     * @param Request $request
     * @return TrumpPlayer
     */
    public function store(Request $request): TrumpPlayer
    {
        $trumpPlayer = new TrumpPlayer;
        $trumpPlayer->fill($request->all());
        $trumpPlayer->save();
        return $trumpPlayer;
    }

    /**
     * @param Request $request
     * @param TrumpPlayer $trumpPlayer
     * @return TrumpPlayer
     */
    public function update(Request $request, TrumpPlayer $trumpPlayer): TrumpPlayer
    {
        $trumpPlayer->fill($request->all());
        $trumpPlayer->save();
        return $trumpPlayer;
    }

    /**
     * @param Request $request
     * @param TrumpPlayer $trumpPlayer
     * @return TrumpPlayer
     */
    public function show(Request $request, TrumpPlayer $trumpPlayer): TrumpPlayer
    {
        return $trumpPlayer;
    }
}
