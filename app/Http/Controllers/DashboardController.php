<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('employee')) {
            echo 'loggin as employee';
        }elseif(Auth::user()->hasRole('superadmin')){
            echo 'loggin as superadmin';
        }elseif(Auth::user()->hasRole('mitra')){
            echo 'loggin as mitra';
        }
    }

    public function switchView(){
        //if(Auth::check()){
            //return view('admin.admindashboard');
        //}else{
            return view('user.userdashboard',['title' => 'Dashboard']);
        //}
    }

    public function logout(){
        $user = request()->user();
        Auth::logout($user);
        return redirect('/');
    }
}
