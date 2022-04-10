<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function CreateEmployeeView(){
        return view('admin.create-employee');
    }

    public function CreateEmployee(Request $request)
    {
        $validator = Validator::make($request->except(['_token']), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nik' => ['required', 'string', 'max:16', 'min:16'],
            'role' => ['required'],
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
        ]);
        if ($validator->fails()) {
            return redirect('/create-employee');
        }
        $user = User::create([
            'name' => request()->name,
            'email' => request()->email,
            'nik' => request()->nik,
            'password'=> Hash::make(request()->password),
        ]);
        $user->attachRole($request->role);
        return redirect('/dashboard');
    }
}
