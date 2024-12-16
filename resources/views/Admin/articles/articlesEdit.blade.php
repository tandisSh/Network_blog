@extends('Admin.layouts.Master')

@section('content')
<h1>ویرایش مقالات</h1>
<form>
    <div id="name">
        <label for="article_name">نام مقاله</label><br />
        <input type="text" id="article_name" name="article_name" required>
    </div>
    <div id="description">
        <label for="article_description">توضیحات</label><br />
        <textarea id="article_description" name="article_description" required></textarea><br>
    </div>
    <div id="writer">
        <label for="article_writer">نام نویسنده</label><br />
        <input type="text" id="article_writer" name="article_writer" required>
    </div>
    <div id="category">
        <label for="article_category">دسته بندی</label>
        <select id="article_category" name="article_category">
            <option value="" disabled selected></option>
        </select>
    </div>
    <div id="image">
        <label for="productimage">تصویر</label><br />
        <input type="file" id="product_image" name="product_image" required>
    </div>
    <button type="submit" name="submit">ویرایش مقاله</button>
</form>
@endsection
