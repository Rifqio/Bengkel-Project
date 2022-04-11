<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('employee')) {
            return view('employee.em-dashboard');
        } elseif (Auth::user()->hasRole('superadmin')) {
            return view('admin.admindashboard');
        } elseif (Auth::user()->hasRole('mitra')) {
            echo 'loggin as mitra';
        } else {
            return view('user.userdashboard', ['title' => 'Landing Page']);
        }
    }

    public function GuestView()
    {
        return view('user.userdashboard', ['title' => 'Dashboard']);
    }

    public function logout()
    {
        $user = request()->user();
        Auth::logout($user);
        return redirect('/');
    }
}
