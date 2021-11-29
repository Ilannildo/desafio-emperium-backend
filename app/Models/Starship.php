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
        "people_id",
    ];
    
    public function people() {
        $this->belongsTo(People::class, 'starship_id', 'id');
    }
}
