@extends('Admin.layouts.Master')

@section('content')
    {{-- <!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <title>add</title>
    <link rel="stylesheet" href="{{asset("AdminAssets/assets/css/add.css")}}">
    <link rel="stylesheet" href="{{asset("AdminAssets/assets/css/font-awesome.min.css")}}">
</head>

<body dir="rtl">
    <main> --}}
    <h1>ثبت دسته بندی</h1>
    <form action="{{ route('Panel.Category.StoreCategory') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="name">
            <label for="productname">نام دسته بندی</label><br />
            <input name="name" type="text" id="product_name" name="product_name" required>
        </div>

        <div id="image">
            <label for="productimage">تصویر</label><br />
            <input name="image" type="file" id="product_image" name="product_image" required>
        </div>
        <button type="submit" name="submit">ثبت دسته بندی</button>
    </form>
    </main>
    </body>

    </html>
@endsection