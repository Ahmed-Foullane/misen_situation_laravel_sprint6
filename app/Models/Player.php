<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    protected $table = "players";
    protected $tillable = [
        "age" ,
        "pois" ,
        "tall" ,
        "player_leg",
        "team_id"
    ];

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
