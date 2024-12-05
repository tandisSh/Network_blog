<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function FormRegister(){
        return view("Auth/Register");
    }
    public function Register(Request $request){
        $dataForm=$request->all();
        User::create($dataForm);

        return redirect()->route('FormRegister');
    }
}
