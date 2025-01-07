@extends('Admin.layouts.Master')

@section('content')
    <h1>ویرایش مقالات</h1>
    <form action="{{ route('Panel.Article.UpdateArticles', $Article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="name">
            <label for="name">نام مقاله</label><br />
            <input value="{{ $Article->name }}" type="text" id="article_name" name="name" required>
        </div>
        <div id="description">
            <label for="description">توضیحات</label><br />
            <textarea value="" id="article_description" name="description" required>{{ $Article->description }}"</textarea><br>
        </div>
        <div id="writer">
            <label for="writer">نام نویسنده</label><br />
            <input value="{{ $Article->writer }}" type="text" id="article_writer" name="writer" required>
        </div>
        <div id="category">
            <label for="category"></label>
            <select id="article_category" name="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div id="image">
            <label for="image">تصویر</label><br />
            <input type="file" id="product_image" name="image">
        </div>
        <button type="submit" name="submit">ویرایش مقاله</button>
    </form>
@endsection
