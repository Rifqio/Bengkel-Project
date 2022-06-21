<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Kecamatan;
use App\Models\User;
use App\Models\Store;
use App\Models\Kota;
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
        if (Auth::user()->hasRole('mitra')) {
            Item::create([
                'name' => request('name'),
                'brand' => request('brand'),
                'price' => request('price'),
                'category_id' => request('category'),
            ]);
            return redirect('dashboard');
        }
    }

    public function ListStore()
    {
        $users = User::whereRoleIs(['mitra'])->get();
        // $non_active = Store::where("id_mitra", "=", Auth::user()->id)->where('status_activation', 0)->get();
        $active = Store::where("id_mitra", "=", Auth::user()->id)->where('status_activation', 1)->get();
        return view('mitra.crud.list-bengkel', [
            'users' => $users,
            'stores' => $active,
        ])->with('success_update', 'Store Sudah Tertambah');
    }

    public function ListPengajuanStore()
    {
        $users = User::whereRoleIs(['mitra'])->get();
        $non_active = Store::where("id_mitra", "=", Auth::user()->id)->where('status_activation', 0)->get();
        return view('mitra.crud.list-bengkel', [
            'users' => $users,
            'stores' => $non_active,
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
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        if (Auth::user()->nik != NULL && Auth::user()->ktp != NULL) {
            return view('mitra.store-register', [
                'user' => $user,
                'kec' => $kecamatan,
                'kota' => $kota,
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
        }else{
            return redirect('list-pengajuan-store')->with('success_update', 'Store has been added');
        }

        Store::create([
            'store_name' => request()->store_name,
            'open' => request()->open,
            'close' => request()->close,
            'phone_store' => request()->phone_store,
            'address' => request()->address,
            'status_activation' => 0,
            'id_mitra' => Auth::user()->id,
            'id_kecamatan' => request()->id_kecamatan,
            'store_image' => request()->store_image,
        ]);

        $notif = 'Pendaftaran Bengkel Sedang Diproses';
        $user = User::find(1);
        Notification::send($user, new StoreRegister($notif));
        return redirect('store-register');
    }

    // public function jumlah(){
    //     // $store = Store::all();
    //     $store = Store::where('id_mitra', Auth::user()->id)->get();
    //     return view('mitra.index', [
    //         'stores' => $store,
    //         // 'stores' => $active,
    //     ]);
    // }

    // public function bengkel_list()
    // {
    //     $mitra = User::find(Auth::user()->id);
    //     $data =
    //     DB::table("stores")
    //     ->join("users", function($join){
    //         $join->on("stores.id_mitra", "=", "users.id");
    //     })
    //     ->select("stores.store_name", "stores.address")
    //     ->where("users.id", "=", auth()->user()->id)
    //     ->get();
    //     // dd($data);
    //    return view('mitra.bengkelList.index', [
    //        'data' => $data,
    //        'mitra' => $mitra
    //    ]);
    // }
}
