<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Static
Route::get('/home', [PageController::class, 'home']);

//Dynamic
Route::get('/profile/{name}', [PageController::class, 'profile']);

//Multiple
Route::get('/profileAge/{name}/{age}', [PageController::class, 'profileAge']);

//Optional
Route::get('/optional/{id?}',  [PageController::class, 'optional']);

// conditional
Route::get('/conditional/{name?}', [PageController::class, 'conditional']);

// dynamic + array
Route::get('/product/{id}',  [PageController::class, 'product']);
