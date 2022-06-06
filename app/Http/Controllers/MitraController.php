<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\StoreRegister;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

class MitraController extends Controller
{
    public function ListStore()
    {
        $users = User::whereRoleIs(['mitra'])->get();
        // $data = Store::all();
        // Auth::user()->id;
        $data_condition = Store::where("id_mitra", "=", Auth::user()->id)->get(); 
        // return ['stores' =>$data_condition,
        //         'users'=>$users];
        return view('mitra.crud.list-bengkel', [
            'users' => $users,
            'stores' => $data_condition
        ])->with('success_update', 'Store Sudah Tertambah');
        
    }
    public function StoreEdit($id)
    {
        $store = Store::where('id', $id)->get();
        return view('mitra.crud.update-bengkel', [
            'stores' => $store
            
        ]);
        
    }

    public function DeleteBengkel($id)
    {
        // dd($id);
        $store = Store::find($id);
        $store->delete();
        return redirect('list-store')->with('success_update', 'Store Has Been Deleted');
    }

    public function StoreUpdate(Request $request)
    {
        $validateData = $request->validate([
            'store_name' => ['required', 'string', 'max:255'],
            'open' => ['required'],
            'close' => ['required'],
            'address' => ['required', 'string'],
            'phone_store' => ['required'],
            // 'store_image' => ['required', 'string'],
            
            
        ]);
        if (!$validateData) {
            return redirect()->back();
        }
        $model = Store::find($request->id);
        $model->update($request->except(['id', '_token']));
        return redirect('list-store')->with('success_update', 'Store has been updated');
        
        
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

        Store::create([
            'store_name' => request()->store_name,
            'open' => request()->open,
            'close' => request()->close,
            'phone_store' => request()->phone_store,
            'address' => request()->address,
            'status_activation' => 0,
            'id_mitra' => Auth::user()->id,
            'id_kecamatan' => 1, //Nanti Diganti
            'store_image' => request()->store_image,
        ]);

        $notif = 'Pendaftaran Bengkel Sedang Diproses';
        $user = User::find(1);
        Notification::send($user, new StoreRegister($notif));

        return redirect('store-register');
    }

    public function bengkel_list()
    {
        $mitra = User::find(Auth::user()->id);
        $data =
        DB::table("stores")
        ->join("users", function($join){
            $join->on("stores.id_mitra", "=", "users.id");
        })
        ->select("stores.store_name", "stores.address")
        ->where("users.id", "=", auth()->user()->id)
        ->get();
        // dd($data);
       return view('mitra.bengkelList.index', [
           'data' => $data,
           'mitra' => $mitra
       ]);
    }
}
