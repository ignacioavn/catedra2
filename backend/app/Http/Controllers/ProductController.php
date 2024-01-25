<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'products' => $products
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer|min:0',
            'image' => ['required', 'string', 'regex:/^images\/\d+\.(png|jfif)$/'],
        ]);

        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
        ]);

        return response()->json([
            'product' => $product
        ], 201);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Producto no encontrado.'], 404);
        }

        return response()->json(['product' => $product], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer|min:0',
            'image' => ['required', 'string', 'regex:/^images\/\d+\.(png|jfif)$/'],
        ]);

        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Producto no encontrado.'], 404);
        }

        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
        ]);

        return response()->json([
            'product' => $product
        ], 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Producto no encontrado.'], 404);
        }

        $product->delete();

        return response()->json(null, 204);
    }
}
