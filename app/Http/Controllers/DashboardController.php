<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Role;
use App\Models\User;
use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('employee')) {
            return view('admin.admindashboard');
        }
        elseif (Auth::user()->hasRole('superadmin'))
        {
            $employe = User::whereRoleIs(['employee'])->get();
            return view('SuperAdmin.admindashboard', [
                'employee' => $employe,
                'total_users' => User::count(),
                'total_stores' => Store::count(),
                'total_items' => Item::count(),
            ]);
        }
        elseif (Auth::user()->hasRole('mitra'))
        {
            $data = DB::table('item_store')->where('user_id', Auth::user()->id)->get();
            $mitra = User::find(Auth::user()->id);
            return view('mitra.index', [
                'data' => $data->count(),
                'mitra' => $mitra,
            ]);
        }

        else {
            return view('user.userdashboard', ['title' => 'Landing Page']);
        }
    }

    public function profile()
    {
        return 'Hello';
    }

    public function GuestView()
    {

        $store = Store::where('status_activation', 1)->get();
        $data = [];
        foreach ($store as $s) {
            $data[] = [
                $s->store_name,
                $s->lat, $s->long,
                $s->id,
            ];
        }
        return view('user.user-dashboard', [
            'items' => Item::all(),
            'location' => $data,
            'title' => 'Dashboard'
        ]);
    }

    public function StoreView($id)
    {
        $data = Store::find($id);
        $latlong = [$data->lat, $data->long];
        return view('user.store-view', [
            'data' => $data,
            'latlong' => $latlong,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->hasRole('superadmin'))
        {
            return view('SuperAdmin.crud.create', [
                'roles' => Role::all()
            ]);
        }
        elseif (Auth::user()->hasRole('mitra'))
        {
            $mitra = User::find(Auth::user()->id);
            $categories = Category::all();
            return view('mitra.crud.create', [
                'mitra' => $mitra,
                'categories' => $categories
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Auth::user()->hasRole('superadmin'))
        {
            $users = User::whereRoleIs(['employee', 'mitra'])->get();
            return view('SuperAdmin.employeeList.index', [
                'users' => $users,
            ]);
        }
        elseif (Auth::user()->hasRole('mitra'))
        {
            $mitra = User::find(Auth::user()->id);
            $store = Store::with('item')->where('id_mitra', Auth::user()->id)->get();
            return view('mitra.productList.index',
            [
                'data' => $store,
                'mitra' => $mitra
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('SuperAdmin.crud.edit', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('dashboard')->with('success', 'User has been deleted');
    }
}
