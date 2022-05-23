<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('user.usersparepart', [
            'title' => 'Categories',
            'categories' => $categories
        ]);
    }

    public function brakes()
    {
        return 'Hello';
    }

    public function suspension()
    {
        return 'Hello';
    }

    public function drivetrain()
    {
        return 'Hello';
    }

    public function electronics()
    {
        return 'Hello';
    }

    public function exhaust()
    {
        return 'Hello';
    }

    public function oil()
    {
        return 'Hello';
    }

    public function wheels()
    {
        return 'Hello';
    }

    public function tools()
    {
        return 'Hello';
    }
}
