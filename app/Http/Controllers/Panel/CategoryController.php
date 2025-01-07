<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
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
    public function Categories()
    {
        $categories = Category::all();
        return view('Admin.categories.Categories', compact('categories'));
    }
    public function EditCategories($id)
    {
        $category = Category::find($id);
        return view('Admin.categories.EditCategory', compact('category'));
    }
    public function UpdateCategories(Request $request, $id)
    {
        $category = Category::find($id);
        $dataform = $request->except('image');

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('AdminAssets\Category-image'), $imageName);
            $dataform = $request->all();
            $dataform['image'] = $imageName;

            $picture = "AdminAssets/Category-image/" . $category->image;
            if (FacadesFile::exists($picture)) {
                FacadesFile::delete($picture);
            }
        }
        $category->update($dataform);

        Alert::success(' موفقیت', 'دسته بندی با موفقیت ویرایش شد ');
        return redirect()->route('Panel.Category.Categories');
    }
    public function DeleteCategories(Request $request, $id)
    {
        $category = Category::find($id);

        $picture = "AdminAssets/Category-image/" . $category->image;
        if (FacadesFile::exists($picture)) {
            FacadesFile::delete($picture);
        }
        $category->delete();

        Alert::success(' موفقیت', 'دسته بندی با موفقیت حذف شد ');
        return redirect()->route('Panel.Category.Categories');
    }
    public function show($id)
    {
        $category = Category::with('articles')->findOrFail($id);
        return view('Home.category', compact('category'));
    }
}
