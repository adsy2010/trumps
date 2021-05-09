<?php

namespace App\Http\Controllers;

use App\Models\TrumpSet;
use Illuminate\Http\Request;

class TrumpSetController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return TrumpSet::get();
    }

    /**
     * @param Request $request
     * @param TrumpSet $trumpSet
     * @return TrumpSet
     */
    public function show(Request $request, TrumpSet $trumpSet): TrumpSet
    {
        return $trumpSet;
    }

    /**
     * @param Request $request
     * @return TrumpSet
     */
    public function store(Request $request): TrumpSet
    {
        $trumpSet = new TrumpSet;
        $trumpSet->fill($request->all());
        $trumpSet->save();
        return $trumpSet;
    }

    /**
     * @param Request $request
     * @param TrumpSet $trumpSet
     * @return TrumpSet
     */
    public function update(Request $request, TrumpSet $trumpSet): TrumpSet
    {
        $trumpSet->fill($request->all());
        $trumpSet->save();
        return $trumpSet;
    }
}
