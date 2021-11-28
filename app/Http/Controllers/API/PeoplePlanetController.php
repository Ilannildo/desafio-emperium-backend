<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PeoplePlanet;
use Illuminate\Http\Request;

class PeoplePlanetController extends Controller
{
    public function createPeoplePlanet(Request $request)
    {
        $people_planet = PeoplePlanet::create([
            'people_id' => $request->people_id,
            'planet_id' => $request->planet_id,
        ]);

        return response()->json([
            'message' => 'Personagem criado com sucesso',
            'result' => $people_planet
        ]);
    }

    public function getPeoplesPlanets()
    {

        $peoplesPlanets = PeoplePlanet::with('peoples')->with('planets')->get();
        return response()->json([
            'result' => $peoplesPlanets
        ]);
    }
}
