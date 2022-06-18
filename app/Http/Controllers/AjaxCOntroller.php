<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class AjaxCOntroller extends Controller
{
    public function searchStore(Request $request){
        $query = $request->get('query');
        $output = '';
        if($query != ''){
            $data = Store::where('store_name', 'like', '%'.$query.'%')->where('status_activation', 1)->get();
            if($data->count() > 0){
                foreach($data as $d){
                    $output .= '
                        <li class="text-left" style="padding:5px;"><a href="/store-view/'.$d->id.'/show">'.$d->store_name.', '.$d->kecamatan->name.'</a></li>
                    ';
                }
            }else{
                $output .= 'Bengkel Tidak Ditemukan';
            }
        }
        echo $output;
    }
}
