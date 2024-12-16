<?php

use App\Http\Controllers\Panel\ArticleController;
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
        //categories list
        Route::get('/Categories', [CategoryController::class, "Categories"])->name('Panel.Category.Categories');
        //category edit page
        Route::get('/Edit{id}', [CategoryController::class, "EditCategories"])->name('Panel.Category.EditCategories');
        //category edit
        Route::post('/Edit{id}', [CategoryController::class, "UpdateCategories"])->name('Panel.Category.UpdateCategories');
        //category delete
        Route::get('/Delete{id}', [CategoryController::class, "DeleteCategories"])->name('Panel.Category.DeleteCategories');
    });
    Route::prefix('Article')->group(function () {
        //show add Article page
        Route::get('/Create', [ArticleController::class, "Create"])->name('Panel.Article.Create');
        //add Articles
        Route::post('/Create', [ArticleController::class, "StoreArticle"])->name('Panel.Article.StoreArticle');
        //Articles list
        Route::get('/Articles', [ArticleController::class, "Articles"])->name('Panel.Article.Articles');
        //category edit page
        // Route::get('/Edit{id}', [CategoryController::class, "EditCategories"])->name('Panel.Category.EditCategories');
        //category edit
        // Route::post('/Edit{id}', [CategoryController::class, "UpdateCategories"])->name('Panel.Category.UpdateCategories');
        //category delete
        // Route::get('/Delete{id}', [CategoryController::class, "DeleteCategories"])->name('Panel.Category.DeleteCategories');
    });
});
