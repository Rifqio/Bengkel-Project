<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function RejectBengkel($id, Request $request){
        $note = 'Dengan berbagai pertimbangan dan peninjauan ulang tentang validasi. Bengkel anda ditolak karena:';
        $validated = $request->validate([
            'alasan' => 'required',
        ]);
        if(!$validated){
            return back()->withErrors($validated);
        }
        $update = Store::where('id', $id)
        ->update(['note' => $request->alasan,
                'status_activation' => 2, //2 Reject
        ]);
        if($update){
            $data = array('alasan'=>request()->alasan, 'title'=>'Ajuan Bengkel Ditolak', 'note'=>$note);
            Mail::send('email.store-reject', $data, function($message) {
                $message->to(request()->email, 'Bengkel Anda Ditolak')->subject
                ('Pengajuan Bengkel Ditolak');
                $message->from(Auth::user()->email, Auth::user()->name);
            });
        }
        return redirect('/list-bengkel');
    }
}
