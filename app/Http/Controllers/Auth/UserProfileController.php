<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function show()
    {
        // گرفتن اطلاعات کاربر وارد شده
        $user = Auth::user();

        // ارسال داده‌ها به ویو
        return view('Auth.Profile', compact('user'));
    }
}
