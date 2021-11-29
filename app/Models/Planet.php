<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    protected $table = 'planets';
    protected $fillable = [
        'name',
        'rotation_period',
        'climate',
        'terrain',
        'population',
        'gravity',
        "url",
    ];

    // public function peoples() {
    //     return $this->hasMany(PeoplePlanet::class, 'planet_id', 'id');
    // }
    public function peoples()
    {
        return $this->belongsToMany(People::class, 'peoples_planets', 'people_id', 'people_id');
    }
}
