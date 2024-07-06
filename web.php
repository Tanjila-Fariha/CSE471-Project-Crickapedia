<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;

use App\Http\Controllers\StadiumController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ProductController;




Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admindashboard', function () {
    //return view('admin/admindashboard2');
//});
Route::get('/admindashboard',[AdminController::class,'view']);


//Route::get('/add_player', function () {
   // return view('admin/add_player');
//});

Route::get('/add_player',[PlayerController::class,'add_player_view']);

Route::get('/add_player/view',[PlayerController::class,'view']);

Route::post('/player/store', [PlayerController::class, 'store'])->name('player.store');



Route::get('/add_blog', function () {
    return view('admin/add_blog');
});

Route::get('/add_iconic', function () {
    return view('admin/add_iconic');
});


//routes for adding stadiums:


Route::get('/add_stadium',[StadiumController::class,'add_stadium_view']);

Route::get('/add_stadium/view',[StadiumController::class,'view']);

Route::post('/stadium/store', [StadiumController::class, 'store'])->name('stadium.store');


//routes for adding stadium ends here




Route::get('/delete', function () {
    return view('admin/delete');
});




//routes for product


Route::get('/add_product',[ProductController::class,'add_product_view']);

Route::get('/add_product/view',[ProductController::class,'product_view']);

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

//routes for product ends here





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
