<?php
use App\Http\Controllers\FlightController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/book/{id}', [BookingController::class, 'showForm'])->name('booking.form');
Route::post('/book/{id}', [BookingController::class, 'submitForm'])->name('booking.submit');
Route::get('/', [FlightController::class, 'searchForm'])->name('flights.search.form');
Route::post('/search', [FlightController::class, 'search'])->name('flights.search');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
