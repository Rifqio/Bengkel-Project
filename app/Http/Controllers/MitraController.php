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
    public function create_product()
    {
        if (Auth::user()->hasRole('mitra'))
        {
            Item::create([
                'name' => request('name'),
                'brand' => request('brand'),
                'price' => request('price'),
                'category_id' => request('category'),
            ]);
            return redirect('dashboard');
        }
    }
    public function StoreRegisterView(){
        $mitra = User::find(Auth::user()->id);
        if(Auth::user()->nik != NULL && Auth::user()->ktp != NULL){
            return view('mitra.addBengkel.index', [
                'mitra' => $mitra,
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

        $store = Store::create([
            'store_name' => request()->store_name,
            'open' => request()->open,
            'close' => request()->close,
            'phone_store' => request()->phone_store,
            'address' =>request()->address,
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
