<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmpController extends Controller
{
    public function StoreValidationView()
    {
        $data = Store::where('status_activation', 0)->get();
        $nonaktif = Store::where('status_activation', 0)->get();
        $aktif = Store::where('status_activation', 1)->get();
        $reject = Store::where('status_activation', 2)->get();
        $banding = Store::where('status_activation', 3)->get();
        $mitra = User::whereRoleIs(['mitra'])->get();
        return view('admin.validasi-bengkel', [
            'stores' => $data,
            'non_aktif' => $nonaktif->count(),
            // 'aktif' => $aktif->count(),
            // 'reject' => $reject->count(),
            // 'banding' => $banding->count(),
            // 'total_mitra' => $mitra->count()
        ]);
    }

    public function StoreValidation(Request $request)
    {
        $store = Store::find(request()->id);
        $store->update($request->except(['_token', 'id']));
        return redirect()->back();
    }

    public function ListMitraView()
    {
        $users = User::whereRoleIs(['mitra'])->get();
        return view('admin.listmitra', [
            'users' => $users,
        ]);
    }

    public function UpdateDataMitra(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255'],
            'nik' => ['required', 'string', 'max:16', 'min:16'],
            // 'nik' => ['required', 'string', 'max:16', 'min:16', 'unique:posts'],
            'npwp' => ['required', 'string', 'max:16', 'min:16',],
        ]);
        if (!$validateData) {
            return redirect('list-mitra');
        }
        $model = User::find($request->id);
        $model->update($request->except(['id']));
        return redirect('list-mitra')->with('success_update', 'User has been updated');
    }

    public function DeleteDataMitra($id)
    {
        // dd($n);
        $users = User::find($id);
        $users->delete();
        return redirect('list-mitra')->with('success_update', 'User has been deleted');;
    }

    public function NonAktifMitra(Request $request){
        // echo $request;
        $note = 'Anda di Non-Aktifkan, Silahkan Hubungi Customer Service Bengkel AE';
        $mitra = User::find($request->id)->update(['created_at' => NULL]);
        // echo $mitra;
            // ->update([ `created_at` == NULL]);
        if ($mitra) {
            $data = array('title' => 'Anda di Non-Aktifkan', 'note' => $note);
            Mail::send('email.mitra-non', $data, function ($message) {
                $message->to(request()->email, 'Anda Di Non-Aktifkan')->subject('Anda di Non-Aktifkan');
                $message->from(Auth::user()->email, Auth::user()->name);
            });
        }
        return redirect('/list-mitra');
    }
}
