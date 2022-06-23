<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Kecamatan;
use App\Models\ItemStore;
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
            $category = explode(',', request('category'));
            Item::create([
                'name' => request('name'),
                'brand' => request('brand'),
                'price' => request('price'),
                'category_id' => $category[0],
                'slug' => strtolower($category[1]),
                'desc' => request('desc')
            ]);
            ItemStore::create([
                'store_id' => request('bengkel'),
                'item_id' => Item::latest()->first()->id,
                'price' => request('price'),
                'user_id' => Auth::id()
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

    public function StoreUpdate(Request $request, $id)
    {
        $validateData = $request->validate([
            'store_name' => ['required', 'string', 'max:255'],
            'open' => ['required'],
            'close' => ['required'],
            'address' => ['required', 'string'],
            'phone_store' => ['required'],
            'store_image' => ['required'],
        ]);
        if (!$validateData) {
            return redirect()->back();
        }
        $old_image = Store::find($id)->store_image;
        if (isset($request->store_image)) {
            $name = time() . "_" . $request->store_image->getClientOriginalName();
            $request->store_image->move(public_path('store_data/' . $id . '/image'), $name);
            if (File::exists(public_path('store_data/' . $id . '/image/' . $old_image))) {
                unlink('store_data/' . $id . '/image/' . $old_image);
            }
        } else {
            $name = $old_image;
        }
        Store::find($id)->update([
            'store_name' => $request->store_name,
            'open' => $request->open,
            'close' => $request->close,
            'address' => $request->address,
            'phone_store' => $request->phone_store,
            'store_image' => $name,
        ]);
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
            'store_image' => 'required',
        ]);

        if (!$validatedData) {
            return redirect('store-register');
        } else {
            return redirect('list-pengajuan-store')->with('success_update', 'Store has been added');
        }

        $name = time() . "_" . $request->store_image->getClientOriginalName();

        Store::create([
            'store_name' => request()->store_name,
            'open' => request()->open,
            'close' => request()->close,
            'phone_store' => request()->phone_store,
            'address' => request()->address,
            'status_activation' => 0,
            'id_mitra' => Auth::user()->id,
            'id_kecamatan' => request()->id_kecamatan,
            'store_image' => $name,
        ]);

        $request->store_image->move(public_path('store_data/' . DB::getPdo()->lastInsertId() . '/image'), $name);
        return redirect('store-register');
    }
}
