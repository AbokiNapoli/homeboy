<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('about', function () {
    return view('about.about'); // Corrected view name
})->name('about');
Route::get('contact', function () {
    return view('contact.contactdetails'); // Corrected view name
})->name('contact');
// Route::resource('about', AboutController::class);
// Route::resource('contact', ContactController::class);
