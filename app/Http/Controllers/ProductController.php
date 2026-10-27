<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    protected $categories = ['Beverages', 'Canned Goods', 'Frozen Food', 'Household', 'Instant Food', 'Pantry', 'Personal Care', 'Snack'];

    protected $units = ['bottle', 'sachet', 'pack', 'can', 'piece', 'cup', 'pouch', 'bar'];

    public function index(Request $request)
    {

        $validQuantity = ['In Stock', 'Low Stock', 'Out of Stock'];
        $validSorting = ['Name ASC', 'Name DESC', 'Price ASC', 'Price DESC', 'Quantity ASC', 'Quantity DESC'];

        $request->validateWithBag('searchBag', [
            'q' => 'nullable|string|min:2|max:50',
            'category' => ['nullable', 'string', Rule::in($this->categories)],
            'quantity' => ['nullable', 'string', Rule::in($validQuantity)],
            'order_by' => ['nullable', 'string', Rule::in($validSorting)],
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
                    case 'In Stock':
                        $query->where('quantity', '>=', 6);
                        break;
                    case 'Low Stock':
                        $query->where('quantity', '>', 0)->where('quantity', '<=', 5);
                        break;
                    case 'Out of Stock':
                        $query->where('quantity', '<=', 0);
                        break;
                }
            });

        if ($request->input('order_by')) {
            match ($request->input('order_by')) {
                'Name ASC' => $products->orderBy('product_name'),
                'Name DESC' => $products->orderBy('product_name', 'desc'),
                'Price ASC' => $products->orderBy('selling_price'),
                'Price DESC' => $products->orderBy('selling_price', 'desc'),
                'Quantity ASC' => $products->orderBy('quantity'),
                'Quantity DESC' => $products->orderBy('quantity', 'desc'),
                default => $products->latest()
            };
        } else {
            $products->latest();
        }

        $results = $products->paginate(10)->appends($activeFilters);

        return view('products', ['products' => $results, 'categories' => $this->categories, 'units' => $this->units]);
    }

    public function store(Request $request)
    {

        $validated = $request->validateWithBag('storeBag', [
            'product_name' => 'required|string|min:3|max:50|unique:products,product_name',
            'category' => ['required', 'string', Rule::in($this->categories)],
            'unit' => ['required', 'string', Rule::in($this->units)],
            'quantity' => 'required|integer|min:0',
            'selling_price' => 'required|numeric|decimal:0,2|min:0',
        ]);

        Product::create($validated);

        session()->flash('success', 'Created Successfully');

        return redirect()->route('products.index');
    }

    public function restockForm()
    {
        return view('restock');
    }

    public function restock(Request $request)
    {
        $validated = $request->validate([
            'product_name' => ['required', 'string', 'exists:products,product_name'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        $product = Product::where('product_name', $validated['product_name'])->firstOrFail();
        $product->increment('quantity', $validated['quantity']);

        return redirect()
            ->route('products.index')
            ->with('success', 'Product restocked successfully.');
    }

    public function update(Request $request, string $id)
    {
        $targetProduct = Product::findorFail($id);

        $validated = $request->validateWithBag('updateBag', [
            'product_name' => [
                'required',
                'string',
                'min:3',
                'max:50',
                Rule::unique('products')->ignore($id)],
            'category' => ['required', 'string', Rule::in($this->categories)],
            'unit' => ['required', 'string', Rule::in($this->units)],
            'quantity' => 'required|integer|min:0',
            'selling_price' => 'required|numeric|decimal:0,2|min:0',
        ]);

        $targetProduct->update($validated);

        session()->flash('success', 'Updated Successfully');

        return back();
    }

    public function destroy(string $id)
    {
        $targetProduct = Product::findOrFail($id);

        $targetProduct->delete();

        session()->flash('success', 'Product Deleted Successfully');

        return back();
    }
}
