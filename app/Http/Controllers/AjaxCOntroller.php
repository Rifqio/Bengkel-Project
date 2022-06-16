<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class AjaxCOntroller extends Controller
{
    public function searchStore(Request $request){
        $query = $request->get('query');
        if($query == ''){
            $store = Store::all();
            return $store;
        }else{
            $data = Store::where('store_name', 'like', '%'.$query.'%')->where('status_activation', 1)->get();
            if($data->count() > 0){
                return $data;
            }else{
                return 'Bengkel Tidak Ditemukan';
            }
        }
    }
}
