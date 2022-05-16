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

    // public function EditDataMitra($id, Request $request){
    //     //dd($request->except(['_token']));
    //     //Untuk Shallom
    //     //Tambahkan Validasi Input
    //     //Update Data dan Delete Data
    //     $user = User::find($id);
    //     // dd($user);

    //     // return view('nama folder.nama file', compact(
    //     //     'user'
    //     // ));
    //     return view('admin.listmitra', compact(
    //         'user'
    //     ));
    // }
    public function UpdateDataMitra(Request $request){
        $model = User::find(request()->id);
        $model->update($request->except(['id']));
        return redirect('list-mitra')->with('success', 'User has been updated');
        // $model = User::find($id);
        // dd($model);
        // $model->update($request->except(['_token','id']));
        // $model->update();
        // return view('admin.listmitra', compact(
        //     'user'
        // ));
}

public function destroy($id)
{
    $users = User::find($id);
        $users->delete();
        return redirect('list-mitra');
}
}
//     public function DeleteDataMitra($id){
//         $users = User::findOrFail($id);
//         $users->delete();
//         return redirect('list-mitra')->with('success', 'User has been deleted');
//     //     $model = User::find(request()->id);
//     //     $model->update($request->except(['id']));
//     //     return redirect('list-mitra');
//         // $model = User::find($id);
//         // dd($model);
//         // $model->update($request->except(['_token','id']));
//         // $model->update();
//         // return view('admin.listmitra', compact(
//         //     'user'
//         // ));
// }
// }
