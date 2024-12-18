<!-- resources/views/profile/show.blade.php -->

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
                    <h3>پروفایل</h3>
                    <ul>
                        <li><strong>ایمیل:</strong> {{ $user->email }}</li>
                        <li><strong>تاریخ ثبت نام:</strong> {{ $user->created_at->format('d M Y') }}</li>
                    </ul>
                    {{-- <a href="{{ route('profile.edit') }}" class="btn btn-edit">Edit Profile</a> --}}
                </div>
            </div>
        </div>
    </section>
@endsection

