<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\YachtController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources([
    'yachts' => YachtController::class,
    '/reservations' => ReservationController::class,
    '/reviews' => ReviewController::class
]);
//Route::get('/reservations', ReservationController::class);
//
//Route::get('/reviews',ReviewController::class);
