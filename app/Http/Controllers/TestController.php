<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index' , [
            'items' => Item::all()
        ]);
    }
}
