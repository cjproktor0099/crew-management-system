<?php

use App\Http\Controllers\CrewApiController;
use App\Http\Controllers\DocumentApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//API for crew CRUD operation 
Route::middleware('api')->group(function () {
    Route::get('/crews', [CrewApiController ::class, 'index']);
    Route::post('/crews', [CrewApiController ::class, 'store']);
    Route::get('/crews/{id}', [CrewApiController ::class, 'show']);
    Route::put('/crews/{id}', [CrewApiController ::class, 'update']);
    Route::delete('/crews/{id}', [CrewApiController ::class, 'destroy']);
});
//API for Document CRUD operation 
Route::middleware('api')->group(function () {
    Route::get('/documents', [DocumentApiController::class, 'index']);
    Route::post('/documents', [DocumentApiController::class, 'store']);
    Route::get('/documents/{id}', [DocumentApiController::class, 'show']);
    Route::put('/documents/{id}', [DocumentApiController::class, 'update']);
    Route::delete('/documents/{id}', [DocumentApiController::class, 'destroy']);
});


