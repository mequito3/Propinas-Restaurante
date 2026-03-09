<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipDistributionController;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider and all of them will | be assigned to the "web" middleware group. Make something great! | */

// Welcome Landing Page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Main Tip Distribution Calculator
Route::get('/calculadora', [TipDistributionController::class , 'index'])->name('tip-distribution.index');

// Placeholder route for saving the shift
Route::post('/liquidate-shift', [TipDistributionController::class , 'store'])->name('tip-distribution.store');
