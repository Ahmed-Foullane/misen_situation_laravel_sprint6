<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

Route::get('/', [TeamController::class, "index"]);


Route::get("/team/{id}",[TeamController::class, "show"]);

Route::post("/team/delet/id", [TeamController::class, "delet"]);