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
    return view ('index',[
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
//Route::resource('/contacts', ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

Auth::routes();