<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffLogoutController extends Controller
{
    public function logout(){
        \Auth::logout();
        return redirect('/home');
    }
}
