<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Store;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        $category=Category::find(request('category'));
        $category->item()->create([
             'name' => request('name'),
             'brand' => request('brand'),
             'price' => request('price'),
        ]);
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
}
