<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\XeroFanController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Project Xero Fan Zone
Route::get('/xero-fan-zone', [XeroFanController::class, 'home'])->name('xero.home');
Route::get('/xero-fan-zone/foraging', [XeroFanController::class, 'foragingShow'])->name('xero.foraging');
Route::get('/xero-fan-zone/foraging/edit', [XeroFanController::class, 'foragingEdit'])->middleware(['auth', 'admin'])->name('xero.foraging-edit');
Route::get('/xero-fan-zone/foraging/add', [XeroFanController::class, 'foragingAdd'])->middleware(['auth'])->name('xero.foraging-add');

require __DIR__.'/auth.php';
