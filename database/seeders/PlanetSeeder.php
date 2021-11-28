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
        ];
        foreach ($planets as $p) {
            Planet::create($p);
        }
    }
}
