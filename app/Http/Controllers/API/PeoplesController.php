<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeoplesController extends Controller
{
    public function getPeoples()
    {
       
        $peoples = People::with('starships')->orderBy('created_at', 'desc')->get();
        return response()->json([
            'result' => $peoples
        ]);
    }

    public function peopleUnique($id)
    {
        $people = People::find($id);
        return response()->json([
            'result' => $people
        ]);
    }

    public function createPeople(Request $request)
    {
        $rules = array(
            'name' => 'required|max:50',
            'gender' => 'required|max:50',
            'url' => 'required|max:50',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }

        $people = People::create([
            'name' => $request->name,
            "height" => $request->height,
            "mass" => $request->mass,
            'hair_color' => $request->hair_color,
            'birth_year' => $request->birth_year,
            'gender' => $request->gender,
            'url' => $request->url,
        ]);

        return response()->json([
            'message' => 'Personagem criado com sucesso',
            'result' => $people
        ]);
    }

    public function updatePeople(Request $request)
    {
        $people = People::where('id', $request->user_id)->update(array(
            'name' => $request->name,
            'birth_year' => $request->birth_year,
        ));
        return response()->json([
            'message' => 'Personagem criado com sucesso',
            'result' => $people
        ]);
    }

    public function deletePeople($id)
    {
        $people = People::find('id', $id);
        $people->delete();
        return response()->json([
            'message' => 'Personagem deletado com sucesso',
        ]);
    }
}
