<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
// use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function CreateEmployee(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nik' => ['required', 'string', 'max:16', 'min:16', 'unique:users,nik'],
            'role' => ['required'],
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
        ]);
        if(!$valid){
            return redirect()->back();
        }
        DB::beginTransaction();
        try{
            $user = User::create([
                'name' => request()->name,
                'email' => request()->email,
                'nik' => request()->nik,
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'password'=> Hash::make(request()->password),
            ]);
            $user->attachRole($request->role);

            $data = array('name'=>request()->name, 'email'=>request()->email, 'password'=> request()->password);
            Mail::send('email.em-sa-email', $data, function($message) {
                $message->to(request()->email, 'Test Email')->subject
                ('Email dan Password Employee');
                $message->from(Auth::user()->email, Auth::user()->name);
            });

            DB::commit();

            return redirect('dashboard/show')->with('success', 'User has been created');
        }catch(\Exception $e){
            DB::rollback();
            echo 'Error Exception';
        }
    }

    public function UpdateEmployee(Request $request){
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'nik' => ['required', 'string', 'max:16', 'min:16'],
        ]);
        if(!$valid){
            return redirect()->back();
        }
        $user_data = User::find($request->id);
        $user_data->update($request->except(['_token', 'id']));
        return redirect('dashboard/show')->with('success', 'User has been updated');
    }

    public function DeleteEmployee($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('dashboard/show')->with('success', 'User has been deleted');
    }


    public function logout()
    {
        $user = request()->user();
        Auth::logout($user);
        return redirect('/');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            //jika user ada maka langsung di redirect ke halaman home
            //jika user tidak ada maka simpan ke database
            //$user_google menyimpan data google account seperti email, foto, dsb

            if($user != null){
                auth()->login($user, true);
                return redirect('dashboard');
            }else{
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => Hash::make(Str::random(24)),
                    'email_verified_at' => now()
                ]);
                $create->attachRole('mitra');

                auth()->login($create, true);
                return redirect('/dashboard');
            }

        } catch (Exception $e) {
            return redirect('login');
        }


    }
}
