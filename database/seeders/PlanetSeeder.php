<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planets = [
            [
                'name' => 'Tatooine',
                'rotation_period' => '23',
                'climate' => 'arid',
                'gravity' => '1 standard',
                'terrain' => 'desert',
                'population' => '200000',
                "url" => "https://swapi.dev/api/planets/1/"
            ],
            [
                'name' => 'Alderaan',
                'rotation_period' => '24',
                'climate' => 'temperate',
                'gravity' => '1 standard',
                'terrain' => 'grasslands, mountains',
                'population' => '2000000000',
                "url" => "https://swapi.dev/api/planets/2"
            ],
            [
                'name' => 'Yavin IV',
                'rotation_period' => '24',
                'climate' => 'temperate, tropical',
                'gravity' => '1 standard',
                'terrain' => 'jungle, rainforests',
                'population' => '1000',
                "url" => "https://swapi.dev/api/planets/3/"
            ],
            [
                "name" => "Hoth",
                "rotation_period" => "23",
                "climate" => "frozen",
                "gravity" => "1.1 standard",
                "terrain" => "tundra, ice caves, mountain ranges",
                "population" => "unknown",
                "url" => "https://swapi.dev/api/planets/4/"
            ],
            [
                "name" => "Dagobah",
                "rotation_period" => "23",
                "climate" => "murky",
                "gravity" => "N/A",
                "terrain" => "swamp, jungles",
                "population" => "unknown",
                "url" => "https://swapi.dev/api/planets/5/"
            ],
            [
                "name" => "Bespin",
                "rotation_period" => "12",
                "climate" => "temperate",
                "gravity" => "1.5 (surface), 1 standard (Cloud City)",
                "terrain" => "gas giant",
                "population" => "6000000",
                "url" => "https://swapi.dev/api/planets/6/"
            ],
            [
                "name" => "Endor",
                "rotation_period" => "18",
                "climate" => "temperate",
                "gravity" => "0.85 standard",
                "terrain" => "forests, mountains, lakes",
                "population" => "30000000",
                "url" => "https://swapi.dev/api/planets/7/"
            ],
            [
                "name" => "Naboo",
                "rotation_period" => "26",
                "climate" => "temperate",
                "gravity" => "1 standard",
                "terrain" => "grassy hills, swamps, forests, mountains",
                "population" => "4500000000",
                "url" => "https://swapi.dev/api/planets/8/"
            ],
            [
                "name" => "Coruscant",
                "rotation_period" => "24",
                "climate" => "temperate",
                "gravity" => "1 standard",
                "terrain" => "cityscape, mountains",
                "population" => "1000000000000",
                "url" => "https://swapi.dev/api/planets/9/"
            ],
            [
                "name" => "Kamino",
                "rotation_period" => "27",
                "climate" => "temperate",
                "gravity" => "1 standard",
                "terrain" => "ocean",
                "population" => "1000000000",
                "url" => "https://swapi.dev/api/planets/10/"
            ],
        ];
        foreach ($planets as $p) {
            Planet::create($p);
        }
    }
}
