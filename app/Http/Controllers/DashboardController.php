<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('employee')) {
            echo 'admin';
        }elseif(Auth::user()->hasRole('superadmin')){
            echo 'superadmin';
        }elseif(Auth::user()->hasRole('mitra')){
            echo 'mitra';
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
