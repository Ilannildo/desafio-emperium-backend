<?php

namespace Database\Seeders;

use App\Models\PeoplePlanet;
use Illuminate\Database\Seeder;

class PeoplePlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people_planet = [
            [
                "people_id" => "1",
                "planet_id" => "1",
            ],
            [
                "people_id" => "5",
                "planet_id" => "2",
            ],
            [
                "people_id" => "9",
                "planet_id" => "3",
            ],
        ];

        foreach ($people_planet as $pp) {
            PeoplePlanet::create($pp);
        }
    }
}
