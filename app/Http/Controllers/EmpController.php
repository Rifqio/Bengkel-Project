<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function StoreValidationView()
    {
        $data = Store::where('status_activation', 0)->get();
        return view('admin.validasi-bengkel', [
            'stores' => $data,
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

    public function UpdateDataMitra(Request $request, User $model)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255'],
            'nik' => ['required', 'string', 'max:16', 'min:16'],
            // 'nik' => ['required', 'string', 'max:16', 'min:16', 'unique:posts'],
            'npwp' => ['required', 'string', 'max:16', 'min:16',],
        ]);
        if (!$validateData) {
            return redirect()->back();
        }
        // $model = User::find($request()->id);
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
}
