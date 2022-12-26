<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Home
Route::get('/', function () {
    return view('home');
});

// Halaman About
Route::get('/about', function () {
    return view('about');
});

// Halaman Place
Route::get('/places', function () {
    return view('places');
});

// Halaman Story
Route::get('/story', function () {
    return view('story');
});

// City
Route::get('/city', function () {
    return view('city');
});
