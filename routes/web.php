<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\formexample;


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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/master', function () {
    return view('master');
});

// Display the calculator form
Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');

// Handle the form submission and calculate the result
Route::post('/calculator', [CalculatorController::class, 'calculate']);

Route::post('/form', [formexample::class, 'createform']);

?>