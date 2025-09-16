<?php

use App\Http\Controllers\CharacteristicsController;
use App\Http\Controllers\StagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Stages routes group
Route::controller(StagesController::class)->group(function(){
    Route::get('/about-me', 'aboutMe')->name('stages');
});

//Characteristics routes
Route::controller(CharacteristicsController::class)->group(function(){
    Route::get('/work-experiences', 'workExperiences')->name('work');
    Route::get('/abilities', 'abilities')->name('abilities');
});
