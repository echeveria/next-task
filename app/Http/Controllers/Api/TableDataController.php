<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class TableDataController extends Controller
{
    public function getProducts()
    {
        // Fetch all products
        $products = Product::all();

        // Return products as JSON
        return response()->json($products);
    }
}