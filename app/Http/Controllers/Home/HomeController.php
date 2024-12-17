<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        $articles = Article::all();
        return view('Home.index', compact('articles'));

    }

}
