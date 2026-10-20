<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $categorizedItems = [
            'Beverages' => [
                ['name' => 'Coca-Cola Sakto', 'unit' => 'bottle'],
                ['name' => 'Sprite Mismo 290ml', 'unit' => 'bottle'],
                ['name' => 'Nescafe Original 3-in-1 Sachet', 'unit' => 'sachet'],
                ['name' => 'Kopiko Blanca Coffee', 'unit' => 'sachet'],
                ['name' => 'Milo Chocolate Drink 22g', 'unit' => 'sachet'],
                ['name' => 'Bear Brand Powdered Milk 33g', 'unit' => 'sachet'],
                ['name' => 'Nestea Lemon Litro', 'unit' => 'pack'],
            ],
            'Canned goods' => [
                ['name' => '555 Sardines in Tomato Sauce', 'unit' => 'can'],
                ['name' => 'Mega Sardines Green', 'unit' => 'can'],
                ['name' => 'Argentina Corned Beef 150g', 'unit' => 'can'],
                ['name' => 'Century Tuna Flakes in Oil', 'unit' => 'can'],
                ['name' => 'MaLing Luncheon Meat Small', 'unit' => 'can'],
            ],
            'Frozen food' => [
                ['name' => 'Purefoods Tender Juicy Hotdog Classic', 'unit' => 'piece'], // sold per piece from the freezer
                ['name' => 'CDO Idol Cheesedog', 'unit' => 'piece'],
                ['name' => 'Mekeni Pork Tocino', 'unit' => 'pack'],
                ['name' => 'CDO Skinless Longganisa', 'unit' => 'pack'],
            ],
            'Household' => [
                ['name' => 'Surf Powder Detergent Sachet', 'unit' => 'sachet'],
                ['name' => 'Downy Sunrise Fresh Sachet', 'unit' => 'sachet'],
                ['name' => 'Joy Dishwashing Liquid Sachet', 'unit' => 'sachet'],
                ['name' => 'Zonrox Bleach Original 250ml', 'unit' => 'bottle'],
            ],
            'Instant food' => [
                ['name' => 'Lucky Me! Pancit Canton Original', 'unit' => 'pack'],
                ['name' => 'Lucky Me! Instant Noodles Chicken', 'unit' => 'pack'],
                ['name' => 'Nissin Cup Noodles Seafood', 'unit' => 'cup'],
            ],
            'Pantry' => [
                ['name' => 'Silver Swan Soy Sauce 200ml', 'unit' => 'bottle'],
                ['name' => 'Datu Puti Vinegar 200ml', 'unit' => 'bottle'],
                ['name' => 'Magic Sarap Sachet 8g', 'unit' => 'sachet'],
                ['name' => 'UFC Banana Ketchup 200g', 'unit' => 'bottle'],
                ['name' => 'Golden Fiesta Cooking Oil pouch', 'unit' => 'pouch'],
                ['name' => 'Bariw Sugar Refined 1/4kg', 'unit' => 'pack'],
            ],
            'Personal Care' => [
                ['name' => 'Sunsilk Smooth & Manageable Shampoo', 'unit' => 'sachet'],
                ['name' => 'Cream Silk Conditioner Pink', 'unit' => 'sachet'],
                ['name' => 'Safeguard Pure White Soap', 'unit' => 'bar'],
                ['name' => 'Colgate Great Regular Toothpaste', 'unit' => 'sachet'],
            ],
            'Snacks' => [
                ['name' => 'Piattos Cheese Small', 'unit' => 'pack'],
                ['name' => 'Chippy Barbecue Large', 'unit' => 'pack'],
                ['name' => 'Boy Bawang Garlic', 'unit' => 'pack'],
                ['name' => 'Fudgee Barr Chocolate', 'unit' => 'piece'],
                ['name' => 'SkyFlakes Crackers Pack', 'unit' => 'pack'],
            ],
        ];

        $masterList = [];
        foreach ($categorizedItems as $category => $items ) {
            foreach ($items as $item) {
                $masterList[] = [
                    'name' => $item['name'],
                    'category' => $category,
                    'unit' => $item['unit']
                ];
            }
        }

        $randomItem = fake()->randomElement($masterList);
        return [
            'product_name' => $randomItem['name'],
            'category' => $randomItem['category'],
            'quantity' => fake()->numberBetween(0, 50),
            'selling_price' => fake()->randomFloat(2, 1, 1000),
            'unit' => $randomItem['unit']
        ];
    }
}
