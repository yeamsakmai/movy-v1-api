<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UpcomingController;
use App\Http\Controllers\EpisodeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/movies', [MovieController::class, 'getMovies']);
Route::get('/upcomings', [UpcomingController::class, 'getUpcoming']);
Route::put('/episodes/{id}/increment-view', [EpisodeController::class, 'incrementViewCount']);
