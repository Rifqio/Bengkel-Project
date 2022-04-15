<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use App\Notifications\StoreRegister;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    public function StoreRegisterView(){
        $user = User::find(1);
        return view('mitra.store-register', [
            'user' => $user,
        ]);
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
}
