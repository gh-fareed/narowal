<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\ContactFormController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Pages::class , 'index']);
Route::get('/about-us', [Pages::class , 'about']);
Route::get('/contact-us', [Pages::class , 'contact']);
Route::get('/industries', [Pages::class , 'industries']);
Route::get('/services', [Pages::class , 'services']);
Route::get('/portfolio', [Pages::class , 'portfolio']);


Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');
