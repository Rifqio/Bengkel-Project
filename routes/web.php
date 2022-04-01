<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('home/landingpage',[
        //'title' => 'Landing Page',
    //]);
//});

//Route::get('/login', function () {
    //return view('auth/login',[
        //'title' => 'Login',
    //]);
//});

//Route::get('/register', function () {
    //return view('auth/register',[
        //'title' => 'Register',
    //]);
//});

Route::get('/', function () {
    return view('home.landingpage', ['title'=>'Landing Page']);
});
//All Role
Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/dashboard',[CheckController::class, 'dashboard'])->name('dashboard');
});
//Admin
Route::middleware(['auth:sanctum','verified', 'role:admin|superadmin'])->group(function () {
    Route::get('/welcome', function () {
        echo 'Halo Admin';
    });
});
//SuperAdmin
Route::middleware(['auth:sanctum','verified', 'role:superadmin'])->group(function () {
    Route::get('/welcomeSuper', function () {
        echo 'Halo SuperAdmin';
    });
});