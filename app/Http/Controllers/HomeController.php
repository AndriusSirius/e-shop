<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        //            $permission = Permission::create(['name'=>'kaka']);
        // $role = Role::findById(2);
        // $role->givePermissionTo('all');
        // auth()->user()->assignRole('user');
        // auth()->user()->givePermissionTo('buy_products');
        //            return auth()->user()->permissions;
        return view('dashboard');
=======
//        Permission::create(['name'=>'all']);
//        Permission::create(['name'=>'buy_products']);
//        Role::create(['name'=>'user']);
//        Role::create(['name'=>'admin']);
//        $role = Role::findById(7);
//        $role->givePermissionTo('all');
        auth()->user()->assignRole('user');
        auth()->user()->givePermissionTo('buy_products');
//            return auth()->user()->permissions;
//        return view('dashboard');
>>>>>>> 12134b3b9bcb6fa42f4e64a53705b939a1e018fd
    }
}
