<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        if($user->hasRole('user')){
            return view('dashboard');
        }else if($user->hasRole('admin')){
            return view('dashboard');
        }else if($user->hasRole('superadmin')){
            return view('dashboard');
        }else{
            echo 'Anda Siapa';
        }
    }
}
