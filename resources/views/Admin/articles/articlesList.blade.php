@extends('Admin.layouts.Master')

@section('content')
<table class="product-table">
    <tr>
        <th>تصویر</th>
        <th>نام مقاله</th>
        <th>نویسنده</th>
        <th>عملیات</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <a class='btn-edit' href="./edit.html">ویرایش</a>
            <a class='btn-delete' href="#">حذف</a>
        </td>
    </tr>
    <tr>
    </tr>
</table>
@endsection

