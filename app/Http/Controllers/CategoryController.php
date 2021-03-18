<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

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
        $categories_first_level = Category::with('subcategories')->where('parent_id', null)->get()->sortBy('nr');

//        return "kategorijų sąrašas";
        return view('category.index', compact('categories', 'categories_first_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $category_tree = self::categoryTree(null, null, 2);
//        foreach ($category_tree as $key => $category){
//            $category_tree[$key]["pavadinimas"] = str_repeat('- ', $category_tree[$key]["lygis"]).$category_tree[$key]["pavadinimas"];
//        }
//
//        return view('category.create', compact('category_tree'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Category::with('subcategories')->where('parent_id', null)->get()->sortBy('nr');

        return view('category.show', compact('category', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function categoryTree($category_list = null, $current_level = null, $max_levels = null)
    {
        if ($category_list == null) {
            $category_list = Category::with('subcategories')->where('parent_id', null)->get()->sortBy('nr');
            $current_level = 0;
        }
        $list = [];
        foreach ($category_list as $category) {
            $list[] = [
                'id' => $category->id,
                'pavadinimas' => $category->pavadinimas,
                'nuoroda' => $category->nuoroda,
                'lygis' => $current_level,
            ];
            if (isset($category->subcategories) && ($current_level < $max_levels || $max_levels == null)) {
                $list = array_merge($list, self::categoryTree($category->subcategories, $current_level + 1, $max_levels));
            }
        }
        return $list;
    }

    public function listing3()
    {
        // neribotas kiekis nuorodų, naudojant kolekcijas

        $categories = Category::with('subcategories')
            ->where('parent_id', null)
            ->get()->sortBy('nr');

        $args = func_get_args();

        $ids = [];
        $route_categories = collect();
        $subcategories = $categories;

        foreach ($args as $link) {
            $category = $subcategories->firstWhere('name', $link);
            if ($category) {
                $ids[] = $category->id;
                $route_categories->add($category);
                $subcategories = $category->subcategories;
            } else {
                $route_categories = null;
                break;
            }
        }

        if ($category) {
            return view('category.listing3', compact('category', 'categories', 'ids', 'route_categories'));
        } else {
            return abort(404);
        }
    }
}
