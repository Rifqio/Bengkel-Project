<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use App\Notifications\StoreRegister;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MitraController extends Controller
{
    public function ListStore()
    {
        $users = User::whereRoleIs(['mitra'])->get();
        // $data = Store::all();
        $data_condition = Store::where("id_mitra", "=", "6")->get(); 
        // return ['stores' =>$data_condition,
        //         'users'=>$users];
        return view('mitra.crud.list-bengkel', [
            'users' => $users,
            'stores' => $data_condition
        ]);
        
    }

    public function StoreUpdate(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255'],
            'nik' => ['required', 'string', 'max:16', 'min:16'],
            // 'nik' => ['required', 'string', 'max:16', 'min:16', 'unique:posts'],
            'npwp' => ['required', 'string', 'max:16', 'min:16',],
        ]);
        if (!$validateData) {
            return redirect()->back();
        }
        $model = User::find($request()->id);
        $model->update($request->except(['id']));
        return redirect('list-mitra')->with('success_update', 'User has been updated');
    }

    public function StoreRegisterView()
    {
        $user = User::find(1);
        if (Auth::user()->nik != NULL && Auth::user()->ktp != NULL) {
            return view('mitra.store-register', [
                'user' => $user,
            ]);
        } else {
            echo 'Lengkapi Data Diri';
        }
    }

    public function StoreRegisterSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'store_name' => 'required|max:255',
            'open' => 'required',
            'close' => 'required',
            'phone_store' => ['required', 'max:12', 'min:11'],
            'address' => 'required',
        ]);

        if (!$validatedData) {
            return redirect('store-register');
        }

        $store = Store::create([
            'store_name' => request()->store_name,
            'open' => request()->open,
            'close' => request()->close,
            'phone_store' => request()->phone_store,
            'address' => request()->address,
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
