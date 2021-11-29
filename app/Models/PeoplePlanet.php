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
        return $this->belongsToMany(People::class, 'peoples_planets', 'people_id', 'people_id');
    }

    public function planets()
    {
        return $this->belongsToMany(Planet::class, 'peoples_planets','planet_id', 'planet_id');
    }
}
