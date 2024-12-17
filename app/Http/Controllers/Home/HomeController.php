<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function Home()
    {
        // واکشی تمام دسته‌بندی‌ها به همراه مقالات مرتبط
        $categories =Category::with('articles')->get();

        return view('Home.index', compact('categories'));
    }

    public function single($id){

        $article = Article::find( $id );
        return view('Home.layouts.Single', compact('article'));
    }

}
