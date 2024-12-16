@extends('Admin.layouts.Master')

@section('content')
    <table class="product-table">
        <tr>
            <th>تصویر</th>
            <th>نام دسته بندی</th>
            <th>تاریخ ثبت</th>
            <th>عملیات</th>
        </tr>
        @foreach ($categories as $category)
            <tr>

                <td>
                    <img src="{{ asset('AdminAssets/Category-image/' . $category->image) }}" alt="">
                </td>
                <td> {{ $category->name }} </td>
                <td> {{ $category->created_at }} </td>
                <td>
                    <a class='btn-edit' href="{{ route('Panel.Category.EditCategories', $category->id) }}">ویرایش</a>
                    <a class='btn-delete' href="{{ route('Panel.Category.DeleteCategories', $category->id) }}">حذف</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
