<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Starship;
use Illuminate\Http\Request;

class StarshipController extends Controller
{
    public function getStarships()
    {
        $starships = Starship::with('peoples')->get();
        return response()->json([
            'result' => $starships
        ]);
    }

    public function starshipUnique($id)
    {
        $starship = Starship::find($id);
        return response()->json([
            'result' => $starship
        ]);
    }

    public function createStarship(Request $request)
    {
        $starship = Starship::create([
            "name" => $request->name,
            "model" => $request->model,
            "manufacturer" => $request->manufacturer,
            "starship_class" => $request->starship_class,
            "max_atmosphering_speed" => $request->max_atmosphering_speed,
            "MGLT" => $request->MGLT,
            "url" => $request->url,
        ]);

        return response()->json([
            'message' => 'Nave espacial criada com sucesso',
            'result' => $starship
        ]);
    }

    public function updateStarship(Request $request)
    {
        $starship = Starship::where('id', $request->id)->update(array(
            "name" => $request->name,
            "model" => $request->model,
            "manufacturer" => $request->manufacturer,
            "starship_class" => $request->starship_class,
        ));
        return response()->json([
            'message' => 'Nave espacial atualizada com sucesso',
            'result' => $starship
        ]);
    }

    public function deleteStarship($id)
    {
        $starship = Starship::find('id', $id);
        $starship->delete();
        return response()->json([
            'message' => 'Nave espacial deletada com sucesso',
        ]);
    }
}
