<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Starship extends Model
{
    use HasFactory;
    protected $table = 'starships';
    protected $fillable = [
        "name",
        "model",
        "manufacturer",
        "starship_class",
        "max_atmosphering_speed",
        "MGLT",
        "url",
    ];

    public function peoples()
    {
        return $this->hasMany(PeopleStarship::class, 'starship_id', 'id');
    }
}
