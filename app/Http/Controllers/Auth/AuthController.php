<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function RegisterForm(){
        return view("Auth.Register");
    }
    public function Register(Request $request){

        $request->validate([
            "name"=>"required",
            "email"=> "required",
            "password"=> "required",
     ]);
    $emailUser=User::where("email",$request->email)->first();
     if($emailUser==null){

        $dataForm=$request->all();
        $user=User::create($dataForm);
        Auth::login($user);
        return redirect()->route("Home");
     }else{
          return redirect()->route("FormRegister")->with('error',"ایمیل از قبل وجود دارد");
     }
    }
    public function FormLogin(){
        return view("Auth.Login");
    }
    public function Login(Request $request){

        $request->validate([

            "email"=> "required",
            "password"=> "required",
     ]);
    $user=User::where("email",$request->email)->where("password",$request->password)->first();
     if($user){
        Auth::login($user);
        return redirect()->route("Home");
     }else{
          return redirect()->route("FormRegister")->with('error',"ایمیل یا رمز غلط است");
     }
    }
    // public function ShowProfile() {
    //     // دریافت کاربر جاری
    //     $user = Auth::user();

    //     // بررسی اینکه آیا کاربری وارد شده است یا خیر
    //     if (!$user) {
    //         return redirect()->route('ShowProfile')->with('error', 'User not found');
    //     }

    //     // ارسال کاربر به ویو برای نمایش پروفایل
    //     return view('Auth.profile', compact('user'));
    // }
}
