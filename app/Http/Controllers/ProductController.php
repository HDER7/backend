<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('variants')->get();

        return response()->json($products);
    }

    public function show($productId)
    {
        $product = Product::with('variants')->findOrFail($productId);

        return response()->json($product);
    }
}
