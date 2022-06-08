<?php

namespace App\Http\Controllers;

use Auth;

class AuthAdminController extends Controller{    
    function showLogin(){
        return view('login');
    }
    function loginProcess(){
        //dd(request()->all());

        if(Auth::guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('beranda')->with('success', 'Login Anda Berhasil');
        }else{
           return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda') ;
       }
    }
    function logoutAdmin(){
        Auth::logout();
        return redirect('login');
    }
    function showRegister(){
        return view('registerweb');
    }
    function showForgotpass(){
        return view('forgotpass');
    }


}