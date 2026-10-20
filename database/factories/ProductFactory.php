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
                ['name' => 'Coca-Cola Sakto', 'unit' => 'bottle', 'price' => 15.00],
                ['name' => 'Sprite Mismo 290ml', 'unit' => 'bottle', 'price' => 23.00],
                ['name' => 'Royal Tru-Orange 500ml', 'unit' => 'bottle', 'price' => 35.00],
                ['name' => 'Nescafe Original 3-in-1 Sachet', 'unit' => 'sachet', 'price' => 10.00],
                ['name' => 'Kopiko Blanca Coffee', 'unit' => 'sachet', 'price' => 11.00],
                ['name' => 'Great Taste White', 'unit' => 'sachet', 'price' => 10.00],
                ['name' => 'Milo Chocolate Drink 22g', 'unit' => 'sachet', 'price' => 12.00],
                ['name' => 'Bear Brand Powdered Milk 33g', 'unit' => 'sachet', 'price' => 16.00],
                ['name' => 'Nestea Lemon Litro', 'unit' => 'pack', 'price' => 22.00],
            ],
            'Canned Goods' => [
                ['name' => '555 Sardines in Tomato Sauce', 'unit' => 'can', 'price' => 28.00],
                ['name' => 'Mega Sardines Green', 'unit' => 'can', 'price' => 29.00],
                ['name' => 'Ligo Sardines Extra Hot', 'unit' => 'can', 'price' => 29.00],
                ['name' => 'Argentina Corned Beef 150g', 'unit' => 'can', 'price' => 42.00],
                ['name' => 'Purefoods Corned Beef', 'unit' => 'can', 'price' => 75.00],
                ['name' => 'Century Tuna Flakes in Oil', 'unit' => 'can', 'price' => 45.00],
                ['name' => '555 Meat Loaf 150g', 'unit' => 'can', 'price' => 32.00],
                ['name' => 'MaLing Luncheon Meat Small', 'unit' => 'can', 'price' => 85.00],
            ],
            'Frozen Food' => [
                ['name' => 'Purefoods Tender Juicy Hotdog Classic', 'unit' => 'piece', 'price' => 12.00],
                ['name' => 'CDO Idol Cheesedog', 'unit' => 'piece', 'price' => 10.00],
                ['name' => 'Mekeni Pork Tocino', 'unit' => 'pack', 'price' => 95.00],
                ['name' => 'Pampanga\'s Best Sweet Ham', 'unit' => 'pack', 'price' => 85.00],
                ['name' => 'CDO Skinless Longganisa', 'unit' => 'pack', 'price' => 75.00],
            ],
            'Household' => [
                ['name' => 'Surf Powder Detergent Sachet', 'unit' => 'sachet', 'price' => 13.00],
                ['name' => 'Ariel Sunrise Fresh Sachet', 'unit' => 'sachet', 'price' => 18.00],
                ['name' => 'Tide Perfect Clean Sachet', 'unit' => 'sachet', 'price' => 17.00],
                ['name' => 'Downy Sunrise Fresh Sachet', 'unit' => 'sachet', 'price' => 12.00],
                ['name' => 'Joy Dishwashing Liquid Sachet', 'unit' => 'sachet', 'price' => 10.00],
                ['name' => 'Zonrox Bleach Original 250ml', 'unit' => 'bottle', 'price' => 25.00],
            ],
            'Instant Food' => [
                ['name' => 'Lucky Me! Pancit Canton Original', 'unit' => 'pack', 'price' => 19.00],
                ['name' => 'Lucky Me! Pancit Canton Extra Hot', 'unit' => 'pack', 'price' => 19.00],
                ['name' => 'Lucky Me! Instant Noodles Chicken', 'unit' => 'pack', 'price' => 17.00],
                ['name' => 'Lucky Me! Instant Noodles Beef', 'unit' => 'pack', 'price' => 17.00],
                ['name' => 'Payless Instant Mami Beef', 'unit' => 'pack', 'price' => 15.00],
                ['name' => 'Nissin Cup Noodles Seafood', 'unit' => 'cup', 'price' => 27.00],
            ],
            'Pantry' => [
                ['name' => 'Silver Swan Soy Sauce 200ml', 'unit' => 'bottle', 'price' => 18.00],
                ['name' => 'Datu Puti Vinegar 200ml', 'unit' => 'bottle', 'price' => 17.00],
                ['name' => 'Magic Sarap Sachet 8g', 'unit' => 'sachet', 'price' => 7.00],
                ['name' => 'UFC Banana Ketchup 200g', 'unit' => 'bottle', 'price' => 22.00],
                ['name' => 'Mang Tomas All-Purpose Sauce', 'unit' => 'bottle', 'price' => 28.00],
                ['name' => 'AJI-NO-MOTO MSG 10g', 'unit' => 'sachet', 'price' => 5.00],
                ['name' => 'Golden Fiesta Cooking Oil pouch', 'unit' => 'pouch', 'price' => 30.00],
                ['name' => 'Bariw Sugar Refined 1/4kg', 'unit' => 'pack', 'price' => 25.00],
            ],
            'Personal Care' => [
                ['name' => 'Sunsilk Smooth & Manageable Shampoo', 'unit' => 'sachet', 'price' => 9.00],
                ['name' => 'Cream Silk Conditioner Pink', 'unit' => 'sachet', 'price' => 10.00],
                ['name' => 'Head & Shoulders Cool Menthol', 'unit' => 'sachet', 'price' => 11.00],
                ['name' => 'Safeguard Pure White Soap', 'unit' => 'bar', 'price' => 45.00],
                ['name' => 'Palmolive Naturals Green Soap', 'unit' => 'bar', 'price' => 38.00],
                ['name' => 'Colgate Great Regular Toothpaste', 'unit' => 'sachet', 'price' => 12.00],
                ['name' => 'Close-Up Red Hot Sachet', 'unit' => 'sachet', 'price' => 11.00],
            ],
            'Snack' => [
                ['name' => 'Piattos Cheese Small', 'unit' => 'pack', 'price' => 18.00],
                ['name' => 'Chippy Barbecue Large', 'unit' => 'pack', 'price' => 20.00],
                ['name' => 'Nova Country BBQ', 'unit' => 'pack', 'price' => 19.00],
                ['name' => 'Clover Chips Cheese', 'unit' => 'pack', 'price' => 18.00],
                ['name' => 'Oishi Prawn Crackers', 'unit' => 'pack', 'price' => 12.00],
                ['name' => 'Boy Bawang Garlic', 'unit' => 'pack', 'price' => 12.00],
                ['name' => 'Fudgee Barr Chocolate', 'unit' => 'piece', 'price' => 10.00],
                ['name' => 'SkyFlakes Crackers Pack', 'unit' => 'pack', 'price' => 12.00],
                ['name' => 'Rebisco Crackers Plain', 'unit' => 'pack', 'price' => 12.00],
            ],
        ];

        $masterList = [];
        foreach ($categorizedItems as $category => $items ) {
            foreach ($items as $item) {
                $masterList[] = [
                    'name' => $item['name'],
                    'category' => $category,
                    'unit' => $item['unit'],
                    'price' => $item['price']
                ];
            }
        }

        $randomItem = fake()->randomElement($masterList);
        return [
            'product_name' => $randomItem['name'],
            'category' => $randomItem['category'],
            'quantity' => fake()->numberBetween(0, 50),
            'selling_price' => $randomItem['price'],
            'unit' => $randomItem['unit']
        ];
    }
}
