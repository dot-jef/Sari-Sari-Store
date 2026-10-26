<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $attributes = Product::factory()->make()->toArray();

            $product = Product::firstOrCreate(
                ['product_name' => $attributes['product_name']], [
                    'category' => $attributes['category'],
                    'quantity' => DB::raw('quantity + ' . $attributes['quantity']),
                    'selling_price' => $attributes['selling_price'],
                    'unit' => $attributes['unit']
                ]
            );

        }
    }
}
