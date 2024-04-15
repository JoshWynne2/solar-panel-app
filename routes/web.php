<?php

use App\Http\Controllers\AlarmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SolarPanelController;
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
    return view('welcome');
});

Route::get('/dashboard', [SolarPanelController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/alarms', [AlarmController::class, 'index'])->middleware(['auth', 'verified'])->name('alarms');
Route::get('/markalarm/{id}', [AlarmController::class, 'edit'])->middleware(['auth', 'verified'])->name('markalarm');
Route::get('/settings', [SolarPanelController::class, 'settings'])->middleware(['auth', 'verified'])->name('settings');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
