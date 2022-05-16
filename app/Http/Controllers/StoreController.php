<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function StoreView(){
        $store = Store::where('status_activation', 1)->get();
        if(Auth::user()->hasRole('employee')){
            $layout = 'admin.list-bengkel-aktif';
        }elseif(Auth::user()->hasRole('superadmin')){
            $layout = 'SuperAdmin.list-bengkel-aktif';
        }
        return view($layout, [
            'stores' => $store,
        ]);
    }

    public function StoreUpdateStatus(){
        $store = Store::find(request()->id);
        $store->update(['status_activation' => request()->status]);
        return redirect('/list-bengkel');
    }
}
