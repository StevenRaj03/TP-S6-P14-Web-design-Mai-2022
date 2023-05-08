<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContenuController;

Route::controller(ProfilController::class)->group(function () {
    Route::get('login', 'auth_form');
    Route::post('login', 'auth');
    Route::get('stats', 'getStats');
});

Route::controller(ContenuController::class)->group(function () {
    Route::get('content/{isFront}', 'index');
    Route::get('content', 'store_form');
    Route::post('content', 'store');
    Route::get('content/{id}', 'show');
    Route::put('content/{id}', 'update');
    Route::delete('content/{id}', 'destroy');
});
