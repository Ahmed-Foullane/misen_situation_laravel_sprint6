<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view("teams", compact("teams"));
    }

    public function show($id){
        $team = Team::find($id);
        return view("team",compact("team"));
    }

    public function delet($id){
        Team::find($id)->delete();
        return rediract()->back();
    }

    public function create(Request $request){
        Team::create([
            "name" => $request->name,
            "city" => $request->city,
            "country" => $request->country,
            "date" => $request->date
        ]);
    }

    public function update($id, Request $request){
        Team::find($id)->update([
            "name" => $request->name,
            "city" => $request->city,
            "country" => $request->country,
            "date" => $request->date
        ]);
    }

    public function showPlayers($teamId){
        $players = Team::find($teamId)->players;
    }
}
