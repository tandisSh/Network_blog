@extends('Admin.layouts.Master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h1 class="display-4">به پنل مدیریت خوش آمدید</h1>
                <p class="text-muted">از اینجا می‌توانید بخش‌های مختلف سایت را مدیریت کنید.</p>
                <hr class="my-4" style="width: 50%; margin: 20px auto; border-top: 2px solid #4b0082;">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table custom-table text-center">
                    <thead>
                        <tr>
                            <th>عنوان</th>
                            <th>مقدار</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>کاربران</td>
                            <td>{{ $usersCount }}</td>
                        </tr>
                        <tr>
                            <td>مقالات</td>
                            <td>{{ $articlesCount }}</td>
                        </tr>
                        <tr>
                            <td>دسته‌بندی‌ها</td>
                            <td>{{ $categoriesCount }}</td>
                        </tr>
                        <tr>
                            <td>نظرات</td>
                            <td>{{ $commentsCount }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
