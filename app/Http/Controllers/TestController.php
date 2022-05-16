<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Tzsk\Otp\Facades\Otp;

class TestController extends Controller
{
    public function index()
    {
        $store = Store::all();
        $data = [];
        foreach($store as $s){
            $data[] = [
                $s->store_name,
                $s->lat,$s->long,
                $s->id,
            ];
        }
        return view('test.index' , [
            'items' => Item::all(),
            'location' => $data,
        ]);
    }

    public function TestEmail(){
        $data = array('name'=>"Nathan Ari Soetopo");
        Mail::send('email.em-sa-email', $data, function($message) {
            $message->to('employee3@test.test', 'Tutorials Point')->subject
               ('Laravel Basic Testing Mail');
            $message->from('SuperAdmin@test.test','NathanAs');
        });
    }

    public function TestCreateProductView(){
        return view('test.create-product' , [
            'categories' => Category::all()
        ]);
    }

    public function TestCreateProductStore(){
        Item::create([
            'name' => request('name'),
            'brand' => request('brand'),
            'price' => request('price'),
            'category_id' => request('category'),
        ]);
        return redirect('test');
    }

    public function TestInputProductView(){
        return view('test.input-product' , [
            'item' => Item::all(),
            'store' => Store::all(),
        ]);
    }

    public function TestInputProductStore(){
        $bengkel = Store::find(request('store'));
        $bengkel->item()->attach(request('item'));
        // detach untuk delete
        return redirect('test');
    }

    public function TestImage(Request $request){
        $user = request()->user();
        $name = time()."_".$request->file('photo')->getClientOriginalName();
        $request->file('photo')->move(public_path('data_bengkel/'.$request->store_name."_".$user->email.'/ktp'), $name);
        dd($name);
    }

    public function map(){
        return view('test.map');
    }

    public function otp(){
        $unique_secret = 'mitra@test.test';
        $otp = otp()->digits(6)->expiry(10)->make($unique_secret);
        //session(["otp_reset_email"=>$otp, "unique_secret"=>$unique_secret]);
        dd($otp);
    }

    public function otpValidation(){
        $unique_secret = session("unique_secret");
        $otp = session("otp_reset_email");
        dd(Otp::digits(6)->expiry(10)->check($otp, $unique_secret));
    }
}
