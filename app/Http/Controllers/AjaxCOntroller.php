<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Store;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function searchStore(Request $request){
        $query = $request->get('query');
        $output = '';
        if($query != ''){
            $data = Store::where('store_name', 'like', '%'.$query.'%')->where('status_activation', 1)->get();
            if($data->count() > 0){
                foreach($data as $d){
                    $output .= '
                        <li class="text-left" style="padding:5px;"><b><a href="/store-view/'.$d->id.'/show">'.$d->store_name.', '.$d->kecamatan->name.', '.$d->kecamatan->kota->name.'</a></b></li>
                    ';
                }
            }else{
                $output .= 'Bengkel Tidak Ditemukan';
            }
        }
        echo $output;
    }

    public function searchKecamatan(Request $request){
        $query = $request->get('query');
        $output = '';
        if($query != ''){
            $data = Kecamatan::where('kota_id', $query)->get();
                $output .= '<option value="">Pilih Kecamatan</option>';
            foreach($data as $d){
                $output .= '
                    <option value="'.$d->id.'">'.$d->name.'</option>
                ';
            }
        }else{
            $output .= '
                <option value="">Pilih Kota Dahulu</option>
            ';
        }
        return $output;
    }
}
