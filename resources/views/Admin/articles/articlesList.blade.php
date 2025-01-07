@extends('Admin.layouts.Master')

@section('content')
    <table class="product-table">
        <tr>
            <th>تصویر</th>
            <th>نام مقاله</th>
            <th>نویسنده</th>
            <th>تاریخ ثبت</th>
            <th>عملیات</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>
                    <img src="{{ asset('AdminAssets/Article-image/' . $article->image) }}" alt="">
                </td>
                <td> {{ $article->name }} </td>
                <td> {{ $article->writer }} </td>
                <td> {{ $article->created_at }} </td>
                <td>
                    <a class='btn-edit' href="{{ route('Panel.Article.EditArticles', $article->id) }}">ویرایش</a>
                    <a class='btn-delete' href="{{ route('Panel.Article.DeleteArticles', $article->id) }}">حذف</a>
                </td>
            </tr>
            <tr>
            </tr>
        @endforeach
    </table>
@endsection
