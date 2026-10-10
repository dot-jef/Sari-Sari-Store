<?php

use Livewire\Component;
use App\Models\Product;

new class extends Component
{
    public $product_name;
    public $category;
    public $quantity;
    public $selling_price;
    public $unit;

    protected $rules = [
        'product_name' => 'required|string',
        'category' => 'required|string',
        'quantity' => 'required|integer|min:0',
        'selling_price' => 'required|numeric|decimal:0,2|min:0',
        'unit' => 'required|string',
    ];

    public function store() {
        $this->validate();

        Product::create([
            'product_name' => $this->product_name,
            'category' => $this->category,
            'quantity' => $this->quantity,
            'selling_price' => $this->selling_price,
            'unit' => $this->unit
        ]);

        $this->reset(['product_name', 'category', 'quantity', 'selling_price', 'unit']);
    }

    public function with(): array {
        return [
            'products' => Product::latest()->get()
        ];
    }
};
?>

<div>
    <table class="min-w-[760px] w-full text-left text-sm">
        <caption class="sr-only">Product inventory list</caption>
        <thead class="border-b border-stone-200 bg-stone-50 text-xs uppercase tracking-wide text-stone-500">
            <tr>
                <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium sm:px-6">Product name</th>
                <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium">Category</th>
                <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium">Quantity</th>
                <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium">Selling price</th>
                <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium">Unit</th>
                <th scope="col" class="whitespace-nowrap px-5 py-3.5 text-right font-medium sm:px-6">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-stone-100 text-stone-600">
            @foreach ($products as $product)
                <tr data-id="{{ $product->id }}" class="transition hover:bg-stone-50/70">
                    <td class="whitespace-nowrap px-5 py-4 font-medium text-stone-800 sm:px-6">{{ $product->product_name }}</td>
                    <td class="whitespace-nowrap px-5 py-4">{{ $product->category }}</td>
                    <td class="whitespace-nowrap px-5 py-4 tabular-nums">{{ $product->quantity }}</td>
                    <td class="whitespace-nowrap px-5 py-4 tabular-nums">&#8369;{{ $product->selling_price }}</td>
                    <td class="whitespace-nowrap px-5 py-4">{{ $product->unit }}</td>
                    <td class="whitespace-nowrap px-5 py-4 sm:px-6">
                        <div class="flex justify-end gap-2">
                            <button type="button" class="rounded-md border border-stone-300 bg-white px-3 py-1.5 text-xs font-medium text-stone-700 transition hover:bg-stone-50">Edit</button>
                            <button type="button" class="rounded-md border border-stone-300 bg-white px-3 py-1.5 text-xs font-medium text-stone-600 transition hover:bg-stone-50">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('modal')
</div>
