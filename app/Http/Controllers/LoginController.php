<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;


class LoginController extends Controller
{

    protected function authenticated()
    {
        /*if(Auth::user()->level == 'superadmin') // Super Admin Login
        {
            return redirect('super')->with('status','Welcome to your dashboard');
        }*/
        if(Auth::user()->level == 'admin') // Admin Login
        {
            return redirect('dashboard')->with('status','Welcome to your dashboard');
        }
        elseif(Auth::user()->level == 'user') // Normal or Default User Login
        {
            return redirect('/')->with('status','Logged in successfully');
        }
    }

    public function login(){
        return view('login');
    }
}


