<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffLoginController extends Controller
{
    public function show_login_form()
    {
        return view('Admin.staff.login');

    }
    public function username(){
        return 'company_email';
    }
    public function staff_login(Request $request)
    {
        $credentials=$request->only('company_email','password');
        if(\Auth::attempt($credentials)){
           return redirect()->intended('home');
        }
    }
}
