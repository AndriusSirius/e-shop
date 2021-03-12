<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Discounts;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        $discounts = \App\Models\Product::join('products', 'products.id', '=', 'discounts.products_id')->get();
        //        dd($parentCategories);


        //        foreach($discounts as $discount){
        //            echo $discount->precentage;
        ////                dd($discounts);
        //
        //        }
        //        if($discounts->precentage != null){
        //            dd($discounts);
        //        }
//
//        $products = Product::with(['images', 'discounts'])->get();
//        return view('home', compact( 'products'));

        //        return view('product.product_list');
    }
    public function detail ($id){
//        $data = Product::find($id);
        $product = Product::with(['images', 'discounts'])->find($id);
        return view('livewire.product', compact('product'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('product_list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
