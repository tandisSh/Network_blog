@extends('Admin.layouts.Master')

@section('content')
<h1>ویرایش مقالات</h1>
<form action="{{route('Panel.Article.UpdateArticles' , $Article->id)}}" method="POST" enctype="multipart/form-data">
    @csrf>
    <div id="name">
        <label for="article_name">نام مقاله</label><br />
        <input value="{{$Article->name}}" type="text" id="article_name" name="article_name" required>
    </div>
    <div id="description">
        <label for="article_description">توضیحات</label><br />
        <textarea value="" id="article_description" name="article_description" required>{{$Article->description}}"</textarea><br>
    </div>
    <div id="writer">
        <label for="article_writer">نام نویسنده</label><br />
        <input value="{{$Article->writer}}" type="text" id="article_writer" name="article_writer" required>
    </div>
    <div id="category">
        <label for="article_category"></label>
        <select id="article_category" name="article_category">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div id="image">
        <label for="productimage">تصویر</label><br />
        <input type="file" id="product_image" name="image" required>
    </div>
    <button type="submit" name="submit">ویرایش مقاله</button>
</form>
@endsection
