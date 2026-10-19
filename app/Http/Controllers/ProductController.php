<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request) {
        $request->validateWithBag('searchBag', [
            'q' => 'nullable|string|min:2'
        ]);

        $activeFilters = array_filter($request->query());

        $products = Product::query()
            ->when($request->input('q'), function ($query, $name) {
                $query->where('product_name', 'LIKE', "%{$name}%");
            })
            ->when($request->input('category'), function ($query, $category) {
                $query->where('category', $category);
            })
            ->when($request->input('quantity'), function ($query, $quantity) {
                switch ($quantity) {
                    case "In Stock":
                        $query->where('quantity', '>=', 6);
                        break;
                    case "Low Stock":
                        $query->where('quantity', '>', 0)->where('quantity', '<=', 5);
                        break;
                    case "Out of Stock":
                        $query->where('quantity', '<=', 0);
                        break;
                }
            })

            ->latest()->paginate(10)->appends($activeFilters);

        return view('products', ['products' => $products]);
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

        return redirect()->route('products.index');
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

        return back();
    }

    public function destroy(string $id) {
        $targetProduct = Product::findOrFail($id);

        $targetProduct->delete();

        session()->flash('success', 'Product Deleted Successfully');

        return back();
    }
}
