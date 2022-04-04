<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin')) {
            return view('admin.admindashboard');
        }else{
            return view('home.landingpage',['title' => 'Landing Page']);
        }
    }

    public function switchView(){
        if(Auth::check()){
            return view('admin.admindashboard');
        }else{
            return view('user.userdashboard',['title' => 'Dashboard']);
        }
    }
}
