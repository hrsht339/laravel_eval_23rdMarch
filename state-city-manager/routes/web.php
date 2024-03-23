<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('states', StateController::class);

Route::resource('states.cities', CityController::class);