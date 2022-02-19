<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ContactController;

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

Route::get('/', function () {
    return view ('home',[
        "title" => "Home",
        "a" => "Hi my name is Fiqri Aulia Muhammad Bustami, you can call me fiqri"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "nama" => "Fiqri Aulia Muhammad Bustami",
        "nama1" => "Fiqri",
        "nama2" => "CV",
        "email" => "ecsperce8@gmail.com",
        "gambar1" => "fiqri.jpg",
        "gambar2" => "ceve.jpg"
    ]);
});
Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery",
        "poster" => "redesign.jpg",
        "water" => "mineralwaterdesign.jpg"
    ]);
});
Route::resource('/contacts', ContactController::class);
