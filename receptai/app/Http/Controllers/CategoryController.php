<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all()->sortBy('nr');

//        return "kategorijų sąrašas";
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
           'pavadinimas' => 'required',
           'nuoroda' => 'required',
           'aprasymas' => 'nullable'
        ]);

        $data["nr"] = 50;
//        dd($data);
        Category::create($data);

//        $category = new Category();
//        $category->pavadinimas = $request->pavadinimas;
//        $category->nuoroda = $request->nuoroda;
//        $category->aprasymas = $request->aprasymas;
//        $category->nr = 100;
//        $category->save();

        return redirect()->route('category.index')->with('success', 'Nauja ketogrija sukurta sėkmingai');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'pavadinimas' => 'required',
            'nuoroda' => 'required',
            'nr' => 'required|integer',
            'aprasymas' => 'nullable'
        ]);

        $category->update($data);

        return redirect()->route('category.index')->with('success', 'Kategorijos duomenys atnaujinti sėkmingai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Kategorija pašalinta');
    }
}
