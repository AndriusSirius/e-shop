<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Product;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $categories = Category::all()->sortBy('nr');
        $categories_first_level = Category::with('subcategories')->where('parent_id', null)->get()->sortBy('nr');
        $ParentCategories = \App\Models\Category::where('parent_id', 0)->get();
        view()->share('ParentCategories', $ParentCategories);
        //        return "kategorijų sąrašas";
        //        return view('category.category', compact('categories', 'categories_first_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_tree = self::categoryTree(null, null, 2);
        foreach ($category_tree as $key => $category) {
            $category_tree[$key]["pavadinimas"] = str_repeat('- ', $category_tree[$key]["lygis"]) . $category_tree[$key]["pavadinimas"];
        }

        return view('category.create', compact('category_tree'));
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
            $category_list = Category::with('subcategories')->where('parent_id', 0)->get()->sortBy('nr');
            $current_level = 0;
        }

        $list = null;

        foreach ($category_list as $category) {
            $element = collect([
                'id' => $category->id,
                'name' => $category->name,
                'link' => $category->link,
                'level' => $current_level,
            ]);
            if (!$list) {
                $list = collect($element);
            } else {
                $list->push($element);
            }
            if (isset($category->subcategories) && ($current_level < $max_levels || $max_levels == null)) {
                $subcategories = self::categoryTree($category->subcategories, $current_level + 1, $max_levels);

                if ($subcategories) {
                    $list->merge($subcategories);
                }
            }
        }

        return $list;
    }

    public static function listing3()
    {
        // neribotas kiekis nuorodų, naudojant kolekcijas

        $categories = Category::with('subcategories')
            ->where('parent_id', 0)
            ->get()->sortBy('nr');

        $args = func_get_args();
        $ids = [];
        $route_categories = collect();
        $subcategories = $categories;

        foreach ($args as $link) {
            $category = $subcategories->firstWhere('link', $link);
//            dd($subcategories);
            if ($category) {
                $ids[] = $category->id;
                $route_categories->add($category);
                $subcategories = $category->subcategories;
            } else {
                $route_categories = null;
                break;
            }
        }
       dd($category);
        if ($category) {
            $product_list = $category->products()->paginate(9);
//            $ParentCategories = \App\Models\Category::where('parent_id',0)->get();
            return view('allproducts', compact('category', 'categories', 'ids', 'route_categories', 'product_list'));
        } else {
            return abort(404);
        }
    }

    public function fullLink(Category $category)
    {
        $FLink = $category->link;

        $parent = $category->parent;

        if ($parent) {
            do {
                if ($parent != null) {
                    $FLink = $parent->link . "/" . $FLink;
                }
                $parent = $parent->parent;
            } while ($parent != null);
        }

        return $FLink;
    }
}
