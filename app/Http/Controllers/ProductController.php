<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Product;

class ProductController extends Controller
{
    public function getProductsByCategory($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->orderBy('price', 'desc')->get();

        return view('products.index', ['products' => $products]);
    }

}
