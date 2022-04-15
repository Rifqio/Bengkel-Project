<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('employee')) {
            return view('admin.admindashboard');
        } elseif (Auth::user()->hasRole('superadmin')) {
            $employe = User::whereRoleIs(['employee'])->get();
            return view('SuperAdmin.admindashboard', ['employee'=>$employe,]);
        } elseif (Auth::user()->hasRole('mitra')) {
            echo 'loggin as mitra';
        } else {
            return view('user.userdashboard', ['title' => 'Landing Page']);
        }
    }

    public function GuestView()
    {
        //return view('user.userdashboard', ['title' => 'Dashboard']);
        $store = Store::all();
        $data = [];
        foreach($store as $s){
            $data[] = [
                $s->store_name,
                $s->lat,$s->long,
            ];
        }
        return view('user.userdashboard' , [
            'items' => Item::all(),
            'location' => $data,
            'title' => 'Dashboard'
        ]);
    }
}
