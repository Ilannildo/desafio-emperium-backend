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
        ];
        foreach ($peoples as $p) {
            People::create($p);
        }
    }
}
