<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
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
        return redirect()->route('Panel.Article.Articles');
    }
    public function Articles()
    {
        $articles = Article::all();
        return view('Admin.articles.articlesList', compact('articles'));
    }
    public function EditArticles($id)
    {
        $categories = Category::all();
        $Article = Article::find($id);
        return view('Admin.articles.articlesEdit', compact('categories','Article'));
    }
    public function UpdateArticles(Request $request, $id)
    {
        $Article = Article::find($id);
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('AdminAssets\Article-image'), $imageName);
        $dataform = $request->all();
        $dataform['image'] = $imageName;

        $picture = "AdminAssets/Article-image/" . $Article->image;
        if (FacadesFile::exists($picture)) {
            FacadesFile::delete($picture);
        }
        $Article->update($dataform);

        Alert::success(' موفقیت', ' مقاله با موفقیت ویرایش شد ');
        return redirect()->route('Panel.Article.Articles');
    }
    public function DeleteArticles(Request $request, $id)
    {
        $Article = Article::find($id);

        $picture = "AdminAssets/Article-image/" . $Article->image;
        if (FacadesFile::exists($picture)) {
            FacadesFile::delete($picture);
        }
        $Article->delete();

        Alert::success(' موفقیت', ' مقاله با موفقیت حذف شد ');
        return redirect()->route('Panel.Article.Articles');
    }
}
