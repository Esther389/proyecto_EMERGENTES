<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantaController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/plantas', [PlantaController::class, 'show']);
Route::get('/plantas/{id}', [PlantaController::class, 'showById']);
Route::post('/plantas', [PlantaController::class, 'store']);
Route::delete('/plantas/{id}', [PlantaController::class, 'delete']);
Route::put('/plantas/{id}', [PlantaController::class, 'edit']);
