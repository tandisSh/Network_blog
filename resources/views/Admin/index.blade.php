@extends('Admin.layouts.Master')

@section('content')
<div class="container mt-5">
    <!-- پیغام خوش‌آمدگویی -->
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <h1>به پنل مدیریت خوش آمدید</h1>
            <p style="color: #666;">از اینجا می‌توانید بخش‌های مختلف سایت را مدیریت کنید.</p>
        </div>
    </div>

    <!-- اطلاعات کلی -->
    <div class="row text-center">
        <div class="col-md-3">
            <div style="padding: 15px; border: 1px solid #ccc; border-radius: 10px;">
                <h3>کاربران</h3>
                <p>{{ $usersCount  }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div style="padding: 15px; border: 1px solid #ccc; border-radius: 10px;">
                <h3>مقالات</h3>
                <p>{{ $articlesCount }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div style="padding: 15px; border: 1px solid #ccc; border-radius: 10px;">
                <h3>دسته‌بندی‌ها</h3>
                <p>{{ $categoriesCount  }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div style="padding: 15px; border: 1px solid #ccc; border-radius: 10px;">
                <h3>نظرات</h3>
                <p>{{ $commentsCount }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
