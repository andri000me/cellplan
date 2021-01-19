<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id)
    {
        $products = Product::find($id);
        return response()->json($products);
    }

    public function create(Request $request)
    {
        $product = new Product();
        $product->name      = $request->input('name');
        $product->price     = $request->input('price');
        $product->category  = $request->input('category');
        $product->save();
        return response()->json("Successfully Created");
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name      = $request->input('name');
        $product->price     = $request->input('price');
        $product->category  = $request->input('category');
        $product->save();
        return response()->json($product);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json("Successfully Deleted");
    }
}
