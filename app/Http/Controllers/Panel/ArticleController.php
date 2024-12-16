<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    public function Create()
    {
        $categories=Category::all();
        return view("Admin.articles.articlesAdd" ,compact("categories"));
    }
    public function StoreArticle(Request $request)
    {

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('AdminAssets\Article-image'), $imageName);
        $dataform = $request->all();
        $dataform['image'] = $imageName;

        Article::create($dataform);

        Alert::success(' موفقیت', ' مقاله با موفقیت اضافه شد ');
        return redirect()->route('Panel.Category.Create');
    }
}
