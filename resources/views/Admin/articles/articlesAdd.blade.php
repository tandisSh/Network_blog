@extends('Admin.layouts.Master')

@section('content')

<form action="{{ route('Panel.Article.StoreArticle') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>ثبت مقاله</h1>
    <div id="name">
        <label for="article_name">نام مقاله</label><br />
        <input type="text" id="article_name" name="name" required>
    </div>
    <div id="description">
        <label for="article_description">توضیحات</label><br />
        <textarea id="article_description" name="description" required></textarea><br>
    </div>
    <div id="writer">
        <label for="article_writer">نام نویسنده</label><br />
        <input type="text" id="article_writer" name="writer" required>
    </div>
    <div id="category">
        <label for="article_category">نام دسته بندی</label>
        <select id="article_category" name="category_id">
            @foreach ($categories as $category)

            <option value="{{$category->id}}">{{$category->name}}</option>
            <option value="highschool"></option>

            @endforeach
        </select>
    </div>
    <div id="image">
        <label for="productimage">تصویر</label><br />
        <input name="image" type="file" id="product_image" name="product_image" required>
    </div>
    <button type="submit" name="submit">ثبت مقاله</button>
</form>

@endsection
