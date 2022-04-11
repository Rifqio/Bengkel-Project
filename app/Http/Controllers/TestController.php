<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index' , [
            'items' => Item::all()
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
}
