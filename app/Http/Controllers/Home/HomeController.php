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
    public function single($id){

        $article = Article::find( $id );
        return view('Home.layouts.Single', compact('article'));
    }

}
