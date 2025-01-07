@extends('Admin.layouts.master')

@section('content')
    <section id="profile" class="profile-section">
        <div class="container">
            <div class="profile-card">
                <div class="profile-header">

                    <div class="profile-info">
                        <h2>{{ $user->name }}</h2>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="profile-image">
                        <img src="{{ asset('AdminAssets/images/profile.jpg') }}" alt="Profile Picture" class="img-fluid">
                    </div>
                </div>
                <div class="profile-body">
                    <h2>اطلاعات پروفایل</h2>
                    <br>
                    <ul>
                        <li><strong>ایمیل:</strong> {{ $user->email }}</li>
                    </ul>
                    <ul>
                        <li><strong>تاریخ ثبت نام:</strong> {{ $user->created_at->format('d M Y') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
