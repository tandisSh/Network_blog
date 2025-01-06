<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\Home\CommentController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Panel\ArticleController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::namespace('Home')->group(function () {

    Route::get('/', [HomeController::class, "Home"])->name('Home');
    //single page
    Route::get('/single/{id}', [HomeController::class, "single"])->name('single');
    //comments
    Route::post('/comments', [CommentController::class, 'Comments'])->name('comments');
    //show all
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

});
Route::get('/panel', function () {
    return view('Admin.index');
})->name('admin.panel')->middleware(Admin::class);

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
        Route::get('/Edit{id}', [ArticleController::class, "EditArticles"])->name('Panel.Article.EditArticles');
        //category edit
        Route::post('/Edit{id}', [ArticleController::class, "UpdateArticles"])->name('Panel.Article.UpdateArticles');
        //category delete
        Route::get('/Delete{id}', [ArticleController::class, "DeleteArticles"])->name('Panel.Article.DeleteArticles');
    });
});

Route::namespace('Auth')->group(function () {
    //register form
    Route::get('/Register', [AuthController::class, "RegisterForm"])->name('RegisterForm');
    //register
    Route::post('/Register', [AuthController::class, "Register"])->name('Register');
    //login form
    Route::get('/Login', [AuthController::class, "LoginForm"])->name('LoginForm');
    //login
    Route::post('/Login', [AuthController::class, "Login"])->name('Login');

    Route::get('/logout', [AuthController::class, "Logout"])->name('Logout');

});
// Route::middleware(['Admin'])->group(function() {
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
?>
