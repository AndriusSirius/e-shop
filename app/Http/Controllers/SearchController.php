<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $products_search = Product::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('summary', 'LIKE', "%{$search}%")
            ->orWhere('model', 'LIKE', "%{$search}%")
            ->orWhere('product_sign', 'LIKE', "%{$search}%")
            ->orWhere('color', 'LIKE', "%{$search}%")
            ->orWhere('type', 'LIKE', "%{$search}%")
            ->orWhere('energy', 'LIKE', "%{$search}%")
            ->orWhere('warranty', 'LIKE', "%{$search}%")
            ->with('images')
            ->paginate(9);
        // Return the search view with the results compacted
        return view('search', compact('products_search'));
    }

}
