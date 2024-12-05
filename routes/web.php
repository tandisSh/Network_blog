<?php

use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Auth')->group(function () {
    Route::get('/Register',[AuthController::class,'FormRegister'])->name('FormRegister');
    Route::post('/Register',[AuthController::class,'Register'])->name('Register');
});
