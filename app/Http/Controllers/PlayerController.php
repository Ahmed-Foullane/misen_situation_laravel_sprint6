<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        $players = Player::all();
        return view("players", compact("players"));
    }

    public function show($id){
        $player = Player::find($id);
        return view("player",compact("player"));
    }

    public function delet($id){
        Player::find($id)->delete();
        return rediract()->back();
    }

    public function create(Request $request){
        Player::create([
            "name" => $request->name,
            "city" => $request->city,
            "country" => $request->country,
            "date" => $request->date
        ]);
    }

    public function update($id, Request $request){
        Player::find($id)->update([
            "name" => $request->name,
            "city" => $request->city,
            "country" => $request->country,
            "date" => $request->date
        ]);
    }

    public function showTeam($playerId){
        $Team = Team::find($playerId)->team;
    }
}
