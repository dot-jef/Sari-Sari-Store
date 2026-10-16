<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::latest()->get();

        return view('products', compact('products'));
    }

    public function store(Request $request) {
        $validated = $request->validateWithBag('storeBag', [
            'product_name' => 'required|string',
            'category' => 'required|string',
            'unit' => 'required|string',
            'quantity' => 'required|integer',
            'selling_price' => 'required|numeric|decimal:0,2'
        ]);

        Product::create($validated);

        session()->flash('success', 'Created Successfully');

        return redirect()->route('products.page');
    }

    public function update(Request $request, string $id) {
        $targetProduct = Product::findorFail($id);

        $validated = $request->validateWithBag('updateBag', [
            'product_name' => 'required|string',
            'category' => 'required|string',
            'unit' => 'required|string',
            'quantity' => 'required|integer',
            'selling_price' => 'required|numeric|decimal:0,2'
        ]);

        $targetProduct->update($validated);

        session()->flash('success', 'Updated Successfully');

        return redirect()->route('products.page');
    }

    public function destroy(string $id) {
        $targetProduct = Product::findOrFail($id);

        $targetProduct->delete();

        session()->flash('success', 'Product Deleted Successfully');

        return redirect()->route('products.page');
    }
}
