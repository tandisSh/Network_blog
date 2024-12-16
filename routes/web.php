<?php

use App\Http\Controllers\Panel\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('Admin.index');
});

Route::prefix('Panel')->group(function () {

    Route::prefix('Category')->group(function () {
        //show add category page
        Route::get('/Create', [CategoryController::class, "Create"])->name('Panel.Category.Create');
        //add categories
        Route::post('/Create', [CategoryController::class, "StoreCategory"])->name('Panel.Category.StoreCategory');
    });
});
