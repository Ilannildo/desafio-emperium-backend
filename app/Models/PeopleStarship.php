<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleStarship extends Model
{
    use HasFactory;
    protected $table = 'peoples_starships';

    public function peoples()
    {
        return $this->hasMany(People::class, 'people_id', 'people_id');
    }

    public function starships()
    {
        return $this->hasMany(Starship::class, 'starship_id', 'starship_id');
    }
}
