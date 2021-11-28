<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeoplePlanet extends Model
{
    use HasFactory;
    protected $table = 'peoples_planets';

    public function peoples()
    {
        return $this->hasMany(People::class, 'people_id', 'people_id');
    }

    public function planets()
    {
        return $this->hasMany(Planet::class, 'planet_id', 'planeta_id');
    }
}
