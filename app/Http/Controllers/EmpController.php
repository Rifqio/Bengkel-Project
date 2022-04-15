<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function StoreValidationView(){
        $data = Store::join('users', 'stores.id', '=', 'users.id')
                ->where('status_activation', 0)
               ->get();
        //$data = Store::where('status_activation', 1)->get();
        return view('admin.validasi-bengkel', [
            'stores' => $data,
        ]);
    }

    public function StoreValidation(Request $request){
        $store = Store::find(request()->id);
        $store->update($request->except(['_token', 'id']));
        //dd($request->except(['_token']));
        return redirect()->back();
    }
}
