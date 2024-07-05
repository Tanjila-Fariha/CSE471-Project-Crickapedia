<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StadiumController;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/add_stadium',[StadiumController::class,'add_stadium_view']);

Route::get('/add_stadium/view',[StadiumController::class,'view']);

Route::post('/stadium/store', [StadiumController::class, 'store'])->name('stadium.store');
