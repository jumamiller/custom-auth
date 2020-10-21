<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\Staff;

class StaffRegisterController extends Controller
{
    public function index(){
        return response()->json(['data'=>Staff::all()]);
    }
    public function show_registration_form(){
        return view('Admin.staff.register');
    }
    public function store(Request $request){

        $staff=Staff::create([
                'first_name'    =>$request->get('first_name'),
                'last_name'     =>$request->get('last_name'),
                'company_email' =>$request->get('company_email'),
                'password'      =>\Hash::make($request->get('password')),
                'phone_number'  =>$request->get('phone_number'),
                'resume'        =>$request->file('resume')->store('Resume'),
                'avatar'        =>$request->file('avatar')->store('Profile'),
                'ipaddress'     =>$request->ip(),
                'device'        =>$request->header('User-Agent'),
            ]);

        Auth::login($staff);
        return redirect('home');
    }
}
