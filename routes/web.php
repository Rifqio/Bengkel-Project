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

Route::get('/landing', function () {
    return view('home.landingpage', ['title' => 'Landing Page']);
});

Route::get('/', [DashboardController::class, 'switchView'])->name('dashboard')->middleware('guest');
//Auth Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(('auth'));


