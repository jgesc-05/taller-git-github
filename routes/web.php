<?php

use App\Http\Controllers\StagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Stages routes group
Route::controller(StagesController::class)->group(function(){
    Route::get('/about-me', 'aboutMe');
});
