<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('event', 'App\Http\Controllers\EventController');
Route::resource('favorite', 'App\Http\Controllers\FavoriteController');