<?php

use App\Http\Controllers\Api\BukuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('buku', [BukuController::class, 'index']);
Route::get('buku/{id}', [BukuController::class, 'show']);
Route::post('buku', [BukuController::class, 'store']);
