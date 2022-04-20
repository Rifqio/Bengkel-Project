<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\NotificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

//Benahi
Route::get('/', [DashboardController::class, 'GuestView'])->name('dashboard')->middleware('guest');

//Notification
Route::get('/mark-read', [NotificationController::class, 'MarkAsAllRead']);

Route::middleware(['auth', 'verified', 'role:superadmin'])->controller(AuthController::class)->group(function () {
    Route::post('/create-employee',  'CreateEmployee');
    Route::post('/update-employee', 'UpdateEmployee');
    Route::delete('/delete-employee/{user}', 'DeleteEmployee');
});

//Mitra
Route::middleware(['auth', 'verified', 'role:mitra'])->controller(MitraController::class)->group(function () {
    Route::get('/store-register', 'StoreRegisterView');
    Route::post('/store-register', 'StoreRegisterSubmit');
});

//Employee
Route::middleware(['auth', 'verified', 'role:employee'])->controller(EmpController::class)->group(function () {
    Route::get('/validasi-bengkel', 'StoreValidationView');
    Route::post('/validasi-bengkel', 'StoreValidation');
});

//Route Confirmation Email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Route Send Notification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//Route Resend Email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Dashboard Route
Route::resource('dashboard', DashboardController::class)->except(['destroy', 'update', 'store'])->middleware(['auth', 'verified']);

//Protected Route
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// For testing only
Route::controller(TestController::class)->group(function () {
    Route::get('test', 'index');
    Route::get('/email-test', 'TestEmail');
    Route::get('/test-create-product', 'TestCreateProductView');
    Route::post('/test-create-product', 'TestCreateProductStore');
    Route::get('/test-input-product', 'TestInputProductView');
    Route::post('/test-input-product', 'TestInputProductStore');
    Route::post('/test-image', 'TestImage');
});


//admin
Route::get('/ListAdmin', function () {
    return view('admin/listadmindashboard');
});
Route::get('/ListMitra', function () {
    return view('admin/listmitra');
});
Route::get('/editadmin', function () {
    return view('admin/listadminedit');
});

Route::get('/sparepart', function () {
    return view('user/usersparepart');
});
