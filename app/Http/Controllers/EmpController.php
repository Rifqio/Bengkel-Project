<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function StoreValidationView(){
        $data = Store::where('status_activation', 0)->get();
        return view('admin.validasi-bengkel', [
            'stores' => $data,
        ]);
    }

    public function StoreValidation(Request $request){
        $store = Store::find(request()->id);
        $store->update($request->except(['_token', 'id']));
        return redirect()->back();
    }

    public function ListMitraView(){
        $users = User::whereRoleIs(['mitra'])->get();
        return view('admin.listmitra', [
            'users' => $users,
        ]);
    }

    public function UpdateDataMitra($id, Request $request){
        //dd($request->except(['_token']));
        //Untuk Shallom
        //Tambahkan Validasi Input
        //Update Data dan Delete Data
        $user = User::find($id);
        dd($user);
    }
}
