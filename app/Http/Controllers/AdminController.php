<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasPermissionTo('edit_all')){

            $produktai = Product::with(['images', 'discount'])->Simplepaginate(9);
            $vartotojai = User::paginate(9);
            $nuolaidos = \App\Models\Discounts::with(['product'])->paginate(9);
            $orderList =  Order::with(['discount', 'ordering'])->get();
            $kategorijos = Category::with('subcategories')->get();

        return view('livewire.admin.show-admin', compact('produktai', 'vartotojai', 'orderList', 'nuolaidos', 'kategorijos'));
        }
        elseif(Auth::user()->hasPermissionTo('buy_products')){
            return redirect()->route('home')->with('warning', 'Tvarkyti produktus gali tik administratorius');
        }
        else{
            return redirect()->route('home')->with('warning', 'Tvarkyti produktus gali tik administratorius');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
