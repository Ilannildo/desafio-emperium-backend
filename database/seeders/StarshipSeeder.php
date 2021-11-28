<?php

namespace Database\Seeders;

use App\Models\Starship;
use Illuminate\Database\Seeder;

class StarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $starships = [
            [
                "name"=> "CR90 corvette",
                "model"=> "CR90 corvette",
                "manufacturer"=> "Corellian Engineering Corporation",
                "starship_class"=> "corvette",
                "max_atmosphering_speed"=> "950",
                "MGLT"=> "60",
                "url"=> "https://swapi.dev/api/starships/2/",
            ],
            [
                "name"=> "Star Destroyer",
                "model"=> "Imperial I-class Star Destroye",
                "manufacturer"=> "Kuat Drive Yards",
                "starship_class"=> "Star Destroyer",
                "max_atmosphering_speed"=> "975",
                "MGLT"=> "60",
                "url"=> "https://swapi.dev/api/starships/3/",
            ],
        ];
        foreach ($starships as $s) {
            Starship::create($s);
        }
    }
}
