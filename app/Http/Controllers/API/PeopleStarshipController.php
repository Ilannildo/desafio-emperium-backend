<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PeopleStarship;
use Illuminate\Http\Request;

class PeopleStarshipController extends Controller
{
    public function createPeopleStarships(Request $request)
    {
        $people_starship = PeopleStarship::create([
            'people_id' => $request->people_id,
            'starship_id' => $request->starship_id,
        ]);

        return response()->json([
            'message' => 'Bem vindo a borda da nave',
            'result' => $people_starship
        ]);
    }

    public function getPeoplesStarships()
    {

        $peoples_starships = PeopleStarship::with('peoples')->with('starships')->get();
        return response()->json([
            'result' => $peoples_starships
        ]);
    }
}
