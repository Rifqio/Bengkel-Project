<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\DashboardController;
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

Route::get('/landing', function () {
    return view('home.landingpage', ['title' => 'Landing Page']);
});

Route::get('/', [DashboardController::class, 'switchView']);

//Auth Route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
