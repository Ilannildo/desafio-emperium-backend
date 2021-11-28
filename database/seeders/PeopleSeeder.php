<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peoples = [
            [
                "name" => "Luke Skywalker",
                "height" => "172",
                "mass" => "77",
                "hair_color" => "blond",
                "birth_year" => "19BBY",
                "gender" => "male",
                "url" => "https://swapi.dev/api/people/1/",
            ],
            [
                "name" => "C-3PO",
                "height" => "167",
                "mass" => "75",
                "hair_color" => "n/a",
                "birth_year" => "112BBY",
                "gender" => "n/a",
                "url" => "https://swapi.dev/api/people/2/",
            ],
            [
                "name" => "R2-D2",
                "height" => "96",
                "mass" => "32",
                "hair_color" => "n/a",
                "birth_year" => "33BBY",
                "gender" => "n/a",
                "url" => "https://swapi.dev/api/people/3/",
            ],
            [
                "name" => "Darth Vader",
                "height" => "202",
                "mass" => "136",
                "hair_color" => "none",
                "birth_year" => "41.9BBY",
                "gender" => "male",
                "url" => "https://swapi.dev/api/people/4/",
            ],
            [
                "name" => "Leia Organa",
                "height" => "150",
                "mass" => "49",
                "hair_color" => "brown",
                "birth_year" => "19BBY",
                "gender" => "female",
                "url" => "https://swapi.dev/api/people/5/",
            ],
            [
                "name" => "Owen Lars",
                "height" => "178",
                "mass" => "120",
                "hair_color" => "brown, grey",
                "birth_year" => "52BBY",
                "gender" => "male",
                "url" => "https://swapi.dev/api/people/6/",
            ],
            [
                "name" => "Beru Whitesun lars",
                "height" => "165",
                "mass" => "75",
                "hair_color" => "brown",
                "birth_year" => "47BBY",
                "gender" => "female",
                "url" => "https://swapi.dev/api/people/7/",
            ],
            [
                "name" => "R5-D4",
                "height" => "97",
                "mass" => "32",
                "hair_color" => "n/a",
                "birth_year" => "unknown",
                "gender" => "n/a",
                "url" => "https://swapi.dev/api/people/8/",
            ],
            [
                "name" => "Biggs Darklighter",
                "height" => "183",
                "mass" => "84",
                "hair_color" => "black",
                "birth_year" => "24BBY",
                "gender" => "male",
                "url" => "https://swapi.dev/api/people/9/",
            ],
            [
                "name" => "Obi-Wan Kenobi",
                "height" => "182",
                "mass" => "77",
                "hair_color" => "auburn, white",
                "birth_year" => "57BBY",
                "gender" => "male",
                "url" => "https://swapi.dev/api/people/10/",
            ],
        ];
        foreach ($peoples as $p) {
            People::create($p);
        }
    }
}
