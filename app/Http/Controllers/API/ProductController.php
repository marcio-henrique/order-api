<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->save();

        return response()->json(['message' => 'Product Created']);
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->save();

        return response()->json(['message' => 'Product Updated']);
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return response()->json(['message' => 'Product Deleted']);
    }
}
