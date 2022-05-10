<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use App\Notifications\StoreRegister;
use Faker\Core\File;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MitraController extends Controller
{
    public function StoreRegisterView(){
        $user = User::find(1);
        if(Auth::user()->nik != NULL && Auth::user()->ktp != NULL){
            return view('mitra.store-register', [
                'user' => $user,
            ]);
        }else{
            echo 'Lengkapi Data Diri';
        }
    }

    public function StoreRegisterSubmit(Request $request){
        $validatedData = $request->validate([
            'store_name' => 'required|max:255',
            'open' => 'required',
            'close' => 'required',
            'phone_store' => ['required', 'max:12', 'min:11'],
            'address' => 'required',
        ]);

        if(!$validatedData){
            return redirect('store-register');
        }
        
        Store::create([
            'store_name' => request()->store_name,
            'open' => request()->open,
            'close' => request()->close,
            'phone_store' => request()->phone_store,
            'address' =>request()->address,
            'status_activation' => 0,
            'id_mitra' => Auth::user()->id,
            'store_image' => request()->store_image,
        ]);

        $notif = 'Pendaftaran Bengkel Sedang Diproses';
        $user = User::find(1);
        Notification::send($user, new StoreRegister($notif));

        return redirect('store-register');
    }

    public function ProfileView(){
        $user = User::find(Auth::user()->id);
        return view('mitra.profile-mitra', [
            'user' => $user,
        ]);
    }

    public function ProfileUpdate(Request $request){
        $validatedData = $request->validate([
            'name' => 'required', 'string', 'max:255',
            'profile' => 'mimes:jpeg,png,jpg',
        ]);
        if(!$validatedData){
            return redirect('mitra-profile');
        }
        if (isset($request->profile)) {
            unlink('data_user/'.$request->email.'/profile/'.Auth::user()->profile_photo_path);
            $name = time()."_".$request->profile->getClientOriginalName();
            $request->profile->move(public_path('data_user/'.$request->email.'/profile'), $name);
            $data = ['name' => $request->name,
            'profile_photo_path' => $name,
            ];
        }else{
            $data = ['name' => $request->name];
        }
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update($data);
        return redirect('mitra-profile')->with('status_update', 'Profile updated!');
    }
}
