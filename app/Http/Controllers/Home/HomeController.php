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
        $categories = Category::with(['articles' => function ($query) {
            $query->latest()->take(3);
        }])->get();

        return view('Home.index', compact('categories'));
    }

    public function single($id){

        $article = Article::find( $id );
        // گرفتن سه پست مشابه با توجه به category_id
        $similarPosts = Article::where('category_id', $article->category_id)
                           ->where('id', '!=', $article->id) // حذف مقاله فعلی
                           ->take(3)
                           ->get();
        return view('Home.Single', compact('article' ,'similarPosts'));
    }

}
