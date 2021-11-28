<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Planet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanetController extends Controller
{
    public function getPlanets()
    {
        $planets = Planet::with('peoples')->get();
        return response()->json([
            'result' => $planets
        ]);
    }

    public function planetUnique($id)
    {
        $planet = Planet::find($id);
        return response()->json([
            'result' => $planet
        ]);
    }

    public function createPlanet(Request $request)
    {
        $rules = array(
            'name' => 'required|max:50',
            'diameter' => 'required|max:50',
            'population' => 'required|max:50',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }

        $Planet = Planet::create([
            'name'  => $request->name,
            'rotation_period'  => $request->rotation_period,
            'climate'  => $request->climate,
            'gravity'  => $request->gravity,
            'terrain'  => $request->terrain,
            'population'  => $request->population,
            "url"  => $request->url,
        ]);

        return response()->json([
            'message' => 'Planeta criado com sucesso',
            'result' => $Planet
        ]);
    }

    public function updatePlanet(Request $request)
    {
        $planet = Planet::where('id', $request->user_id)->update(array(
            'name' => $request->name,
            'diameter' => $request->diameter,
            'population' => $request->population,
        ));
        return response()->json([
            'message' => 'Planeta criado com sucesso',
            'result' => $planet
        ]);
    }

    public function deletePlanet($id)
    {
        $planet = Planet::find('id', $id);
        $planet->delete();
        return response()->json([
            'message' => 'Planeta deletado com sucesso',
        ]);
    }
}
