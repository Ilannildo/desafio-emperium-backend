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
                "name" => "CR90 corvette",
                "model" => "CR90 corvette",
                "manufacturer" => "Corellian Engineering Corporation",
                "starship_class" => "corvette",
                "max_atmosphering_speed" => "950",
                "MGLT" => "60",
                "url" => "https://swapi.dev/api/starships/2/",
                "people_id" => 1
            ],
            [
                "name" => "Star Destroyer",
                "model" => "Imperial I-class Star Destroye",
                "manufacturer" => "Kuat Drive Yards",
                "starship_class" => "Star Destroyer",
                "max_atmosphering_speed" => "975",
                "MGLT" => "60",
                "url" => "https://swapi.dev/api/starships/3/",
                "people_id" => 3
            ],
            [
                "name" => "Sentinel-class landing craft",
                "model" => "Sentinel-class landing craft",
                "manufacturer" => "Sienar Fleet Systems, Cyngus Spaceworks",
                "starship_class" => "landing craft",
                "max_atmosphering_speed" => "1000",
                "MGLT" => "70",
                "url" => "https://swapi.dev/api/starships/5/",
                "people_id" => 2
            ],
            [
                "name" => "Death Star",
                "model" => "DS-1 Orbital Battle Station",
                "manufacturer" => "Imperial Department of Military Research, Sienar Fleet Systems",
                "starship_class" => "Deep Space Mobile Battlestation",
                "max_atmosphering_speed" => "n/a",
                "MGLT" => "10",
                "url" => "https://swapi.dev/api/starships/9/",
                "people_id" => null
            ],
            [
                "name" => "Millennium Falcon",
                "model" => "YT-1300 light freighter",
                "manufacturer" => "Corellian Engineering Corporation",
                "max_atmosphering_speed" => "1050",
                "MGLT" => "75",
                "starship_class" => "Light freighter",
                "url" => "https://swapi.dev/api/starships/10/",
                "people_id" => null
            ],
            [
                "name" => "Y-wing",
                "model" => "BTL Y-wing",
                "manufacturer" => "Koensayr Manufacturing",
                "max_atmosphering_speed" => "1000km",
                "MGLT" => "80",
                "starship_class" => "assault starfighter",
                "url" => "https://swapi.dev/api/starships/11/",
                "people_id" => null
            ],
            [
                "name" => "X-wing",
                "model" => "T-65 X-wing",
                "manufacturer" => "Incom Corporation",
                "max_atmosphering_speed" => "1050",
                "MGLT" => "100",
                "starship_class" => "Starfighter",
                "url" => "https://swapi.dev/api/starships/12/",
                "people_id" => null
            ],
            [
                "name" => "TIE Advanced x1",
                "model" => "Twin Ion Engine Advanced x1",
                "manufacturer" => "Sienar Fleet Systems",
                "max_atmosphering_speed" => "1200",
                "MGLT" => "105",
                "starship_class" => "Starfighter",
                "url" => "https://swapi.dev/api/starships/13/",
                "people_id" => null
            ],
            [
                "name" => "Executor",
                "model" => "Executor-class star dreadnought",
                "manufacturer" => "Kuat Drive Yards, Fondor Shipyards",
                "max_atmosphering_speed" => "n/a",
                "MGLT" => "40",
                "starship_class" => "Star dreadnought",
                "url" => "https://swapi.dev/api/starships/15/",
                "people_id" => null
            ],
            [
                "name" => "Rebel transport",
                "model" => "GR-75 medium transport",
                "manufacturer" => "Gallofree Yards, Inc.",
                "max_atmosphering_speed" => "650",
                "MGLT" => "20",
                "starship_class" => "Medium transport",
                "url" => "https://swapi.dev/api/starships/17/",
                "people_id" => null
            ],
        ];
        foreach ($starships as $s) {
            Starship::create($s);
        }
    }
}
