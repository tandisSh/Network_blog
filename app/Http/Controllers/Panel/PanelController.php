<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;


class PanelController extends Controller
{
    public function index()
    {

        $usersCount = User::count();
        $articlesCount = Article::count();
        $categoriesCount = Category::count();
        $commentsCount = Comment::count();

        return view('Admin.index', compact('usersCount', 'articlesCount', 'categoriesCount', 'commentsCount'));
    }
}
