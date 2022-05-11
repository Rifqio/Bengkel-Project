<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function ProfileView(){
        $user = User::find(Auth::user()->id);
        if(Auth::user()->hasRole('mitra')){
           $redirect = 'mitra.profile-mitra';
        }elseif(Auth::user()->hasRole('superadmin')){
            $redirect = 'SuperAdmin.profile-superadmin';
        }elseif(Auth::user()->hasRole('employee')){
            $redirect = 'admin.profile-employee';
        }
        return view($redirect, [
            'user' => $user,
        ]);
    }

    public function ProfileUpdate(Request $request){
        $validatedData = $request->validate([
            'name' => 'required', 'string', 'max:255',
            'profile' => 'mimes:jpeg,png,jpg',
        ]);
        if(!$validatedData){
            return redirect('mitra-profile');
        }
        DB::beginTransaction();
        try{
            if (isset($request->profile)) {
                $name = time()."_".$request->profile->getClientOriginalName();
                $request->profile->move(public_path('data_user/'.Auth::user()->id.'/profile'), $name);
                $data = [   'name' => $request->name,
                    'profile_photo_path' => $name,
                ];
            }else{
                $data = ['name' => $request->name];
            }
            DB::table('users')
            ->where('id', Auth::user()->id)
            ->update($data);
            DB::commit();
            if(File::exists(public_path('data_user/'.Auth::user()->id.'/profile/'.Auth::user()->profile_photo_path)) && isset($request->profile)){
                unlink('data_user/'.Auth::user()->id.'/profile/'.Auth::user()->profile_photo_path);
            }
            $status = 'status_update';
            $msg = 'Profile Update!';
        }catch(\Exception $e){
            unlink('data_user/'.Auth::user()->id.'/profile/'.$name);
            DB::rollback();
            $status = 'status_update_fail';
            $msg = 'Profile Gagal Update!';
        }
        return redirect('profile')->with($status, $msg);
    }
}
