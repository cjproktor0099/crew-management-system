<?php

use App\Http\Controllers\CrewController;
use App\Http\Controllers\ProfileController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [CrewController::class, 'index'])->name('dashboard');
    Route::get('/crews', [CrewController::class, 'index'])->name('crews.index');
    Route::get('/crews/create', [CrewController::class, 'create'])->name('crews.create');
    Route::post('/crews', [CrewController::class, 'store'])->name('crews.store');
    Route::get('/crews/{crew}/edit', [CrewController::class, 'edit'])->name('crews.edit');
    Route::put('/crews/{crew}', [CrewController::class, 'update'])->name('crews.update');
    Route::delete('/crews/{crew}', [CrewController::class, 'destroy'])->name('crews.destroy');
    
    Route::resource('documents', 'App\Http\Controllers\DocumentController');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/documents', [App\Http\Controllers\DocumentController::class, 'index'])->name('documents.index');

});
	
Route::get('/crews', [CrewController::class, 'index'])->name('crews.index');
require __DIR__.'/auth.php';
