<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


Route::get('/', [EventController::class, 'index']);

Route::get("/addpost", [EventController::class, 'addpost']);

Route::post("/postar", [EventController::class, 'store']);

Route::delete("/posts/{id}", [EventController::class, 'destroy']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
