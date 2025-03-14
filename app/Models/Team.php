<?php

namespace App\Models;

use App\Models\Player;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $table = "teams";
    protected $tillable = [
       "name" ,
            "city" ,
            "country",
            "date" 
    ];

    public function players(){
        return $this->HasMany(Player::class);
    }
}
