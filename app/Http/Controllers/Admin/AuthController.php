<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;


class AuthController extends Controller
{
    public function showLoginForm(){
        return view('backend.auth.login');
    }

    public function login(Request $request){
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->intended(route('admin'));
        }
        return back()->withInput($request->only('email'));
    }
    public function index(){
        $visits = 2;
        return view('backend.layouts.dashboard',compact('visits'));
    }
}
