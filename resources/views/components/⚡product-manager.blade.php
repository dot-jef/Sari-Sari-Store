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
    ]

    public function store() {
        $this->validate();

        Product::create([
            'product_name' => $this->$product_name,
            'category' => $this->$category,
            'quantity' => $this->$quantity,
            'selling_price' => $this->$selling_price,
            'unit' => $this->$unit
        ]);

        $this->reset(['product_name', 'category', 'quantity', 'selling_price', 'unit']);
    }
};
?>

<div>
    {{-- Nothing worth having comes easy. - Theodore Roosevelt --}}
</div>
