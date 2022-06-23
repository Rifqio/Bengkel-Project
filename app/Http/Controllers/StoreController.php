<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function StoreView()
    {
        $store = Store::where('status_activation', 1)->get();
        if (Auth::user()->hasRole('employee')) {
            $layout = 'admin.list-bengkel-aktif';
        } elseif (Auth::user()->hasRole('superadmin')) {
            $layout = 'SuperAdmin.list-bengkel-aktif';
        }

        return view($layout, [
            'stores' => $store,
        ]);
    }

    public function StoreReject()
    {
        $store = Store::where('status_activation', 2)->get();
        $data_condition = Store::where("id_mitra", "=", Auth::user()->id)->where('status_activation', 2)->get();

        if (Auth::user()->hasRole('employee')) {
            $layout = 'admin.list-bengkel-aktif';
        } elseif (Auth::user()->hasRole('superadmin')) {
            $layout = 'SuperAdmin.list-bengkel-aktif';
        } elseif (Auth::user()->hasRole('mitra')) {
            $layout = 'mitra.crud.list-bengkel';
        };

        if (Auth::user()->hasRole('mitra')) {
            return view($layout, [
                'stores' => $data_condition
            ]);
        } else {
            return view($layout, [
                'stores' => $store,
            ]);
        }
    }

    public function StoreBanding()
    {
        $store = Store::where('status_activation', 3)->get();
        $data_condition = Store::where("id_mitra", "=", Auth::user()->id)->where('status_activation', 3)->get();

        if (Auth::user()->hasRole('employee')) {
            $layout = 'admin.validasi-bengkel';
        } elseif (Auth::user()->hasRole('superadmin')) {
            $layout = 'SuperAdmin.list-bengkel-aktif';
        } elseif (Auth::user()->hasRole('mitra')) {
            $layout = 'mitra.crud.list-bengkel';
        };
        if (Auth::user()->hasRole('mitra')) {
            return view($layout, [
                'stores' => $data_condition
            ]);
        } else {
            return view($layout, [
                'stores' => $store,
            ]);
        }
    }

    public function StoreUpdateStatus()
    {
        //echo request()->email;
        $note = 'Bengkel Anda Sudah Dikaktifkan';
        $store = Store::find(request()->id)
            ->update(['status_activation' == 1]);
        if ($store) {
            $data = array('title' => 'Bengkel di Non-Aktifkan', 'note' => $note);
            Mail::send('email.store-non', $data, function ($message) {
                $message->to(request()->email, 'Bengkel Anda Di Non-Aktifkan')->subject('Bengkel di Non-Aktifkan');
                $message->from(Auth::user()->email, Auth::user()->name);
            });
        }
        return redirect('/list-mitra');
    }

    public function RejectBengkel($id, Request $request)
    {
        $note = 'Dengan berbagai pertimbangan dan peninjauan ulang tentang validasi. Bengkel anda ditolak karena:';
        $validated = $request->validate([
            'alasan' => 'required',
        ]);
        if (!$validated) {
            return back()->withErrors($validated);
        }
        $status = Store::where('id', $id)->first();
        if ($status->status_activation == 0) {
            $title = 'Pengajuan Bengkel Ditolak';
        } else if ($status->status_activation == 3) {
            $title = 'Banding Bengkel Ditolak';
        } elseif ($status->status_activation == 1) {
            $title = 'Bengkel Anda di Non-Aktifkan';
        }
        $update = Store::where('id', $id)
            ->update([
                'note' => $request->alasan,
                'status_activation' => 2, //2 Reject.
            ]);
        if ($update) {
            $data = array('alasan' => request()->alasan, 'title' => $title, 'note' => $note);
            Mail::send('email.store-reject', $data, function ($message) {
                $message->to(request()->email, 'Bengkel Anda Ditolak')->subject('Status Aktivasi Bengkel');
                $message->from(Auth::user()->email, Auth::user()->name);
            });
        }
        return redirect('/list-bengkel');
    }
   
    public function StoreBandingUpdate(Request $request)
    {
        // dd($request);
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
        $model->update([
            'store_name' => $request->store_name,
            'open' => $request->open,
            'close' => $request->close,
            'address' => $request->address,
            'phone_store' => $request->phone_store,
            'status_activation' => 3
        ]);
        return redirect('banding-bengkel')->with('success_update', 'Store has been updated');
    }
}
