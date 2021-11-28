<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
  use HasFactory;
  protected $table = 'peoples';
  protected $fillable = [
    "name",
    "height",
    "mass",
    "hair_color",
    "birth_year",
    "gender",
    "url",
  ];

  public function planets()
  {
    return $this->hasMany(PeoplePlanet::class, 'people_id', 'id');
  }

  public function starships()
  {
    return $this->hasMany(PeopleStarship::class, 'people_id', 'id');
  }
}
