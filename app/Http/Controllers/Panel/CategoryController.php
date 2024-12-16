<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{
    public function Create()
    {
        return view("Admin.categories.CreateCategory");
    }
    public function StoreCategory(Request $request)
    {

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('AdminAssets\Category-image'), $imageName);
        $dataform = $request->all();
        $dataform['image'] = $imageName;

        Category::create($dataform);

        Alert::success(' موفقیت', 'دسته بندی با موفقیت اضافه شد ');
        return redirect()->route('Panel.Category.Categories');
    }
    public function Categories(){
        $categories = Category::all();
        return view('Admin.categories.Categories' , compact('categories'));
    }
}
