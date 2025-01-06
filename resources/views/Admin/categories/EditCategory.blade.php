@extends('Admin.layouts.Master')

@section('content')

    <h1>ویرایش دسته بندی</h1>
    <form action="{{ route('Panel.Category.UpdateCategories' , $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="name">
            <label for="productname">نام دسته بندی</label><br />
            <input name="name" value="{{$category->name}}" type="text" id="product_name" name="product_name" required>
        </div>

        <div id="image">
            <label for="productimage">تصویر</label><br />
            <input name="image" type="file" id="product_image" name="product_image" >
        </div>
        <button type="submit" name="submit">ویرایش دسته بندی</button>
    </form>
    </main>
    </body>

    </html>
@endsection
