<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function RegisterForm()
    {
        return view("Auth.Register");
    }
    public function Register(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        $emailUser = User::where("email", $request->email)->first();
        if ($emailUser == null) {

            $dataForm = $request->all();
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
            return redirect()->route("Home");
        } else {
            return redirect()->route("RegisterForm")->with('error', "ایمیل از قبل وجود دارد");
        }
    }
    public function LoginForm()
    {
        return view("Auth.Login");
    }
    public function Login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);


        $user = User::where("email", $request->email)->first();


        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route("Home");
        } else {
            return redirect()->route("LoginForm")->with('error', "ایمیل یا رمز عبور اشتباه است");
        }
    }
    public function Logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('Home');
    }
}
