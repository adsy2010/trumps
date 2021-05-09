<?php

namespace App\Http\Controllers;

use App\Models\TrumpCard;
use Illuminate\Http\Request;

class TrumpCardController extends Controller
{
    public function show(Request $request, TrumpCard $trumpCard)
    {
        return $trumpCard;
    }
}
