<?php
// TODO: delete the controller and put it in the ProductManager livewire component
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'product_name' => 'required|string',
            'category' => 'required|string',
            'quantity' => 'required|integer|min:0',
            'selling_price' => 'required|numeric|decimal:0,2|min:0',
            'unit' => 'required|string',
        ]);

        $newProduct = Product::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Created Successfully',
            'product' => $newProduct
            ]);
    }
}
