<?php

use Illuminate\Support\Facades\Route;

Route::apiResources([
    'movies' => \App\Http\Controllers\MovieController::class,
]);

Route::get('/counts', \App\Http\Controllers\CountController::class);
