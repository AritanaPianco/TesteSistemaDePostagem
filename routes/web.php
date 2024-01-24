<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


Route::get('/', [EventController::class, 'index']);

Route::get("/addpost", [EventController::class, 'addpost']);

Route::post("/postar", [EventController::class, 'store']);

Route::delete("/posts/{id}", [EventController::class, 'destroy']);
