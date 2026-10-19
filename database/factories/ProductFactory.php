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

    // TODO: continue the items generation
    public function definition(): array
    {
        $categorizedItems = [
            'Beverages' => [
                'Coca-Cola Sakto', 'Sprite Mismo 290ml', 'Royal Tru-Orange 500ml',
                'Nescafe Original 3-in-1 Sachet', 'Kopiko Blanca Coffee', 'Great Taste White',
                'Milo Chocolate Drink 22g', 'Bear Brand Powdered Milk 33g', 'Nestea Lemon Litro'
            ],
            'Canned goods' => [
                '555 Sardines in Tomato Sauce', 'Mega Sardines Green', 'Ligo Sardines Extra Hot',
                'Argentina Corned Beef 150g', 'Purefoods Corned Beef', 'Century Tuna Flakes in Oil',
                '555 Meat Loaf 150g', 'MaLing Luncheon Meat Small'
            ],
            'Frozen food' => [
                'Purefoods Tender Juicy Hotdog Classic', 'CDO Idol Cheesedog', 'Mekeni Pork Tocino',
                'Pampanga\'s Best Sweet Ham', 'CDO Skinless Longganisa', 'Chorizo de Cebu Pack'
            ],
            'Household' => [
                'Surf Powder Detergent Sachet', 'Ariel Sunrise Fresh Sachet', 'Tide Perfect Clean Sachet',
                'Downy Sunrise Fresh Sachet', 'Joy Dishwashing Liquid Sachet', 'Zonrox Bleach Original 250ml'
            ],
            'Instant food' => [
                'Lucky Me! Pancit Canton Original', 'Lucky Me! Pancit Canton Extra Hot',
                'Lucky Me! Instant Noodles Chicken', 'Lucky Me! Instant Noodles Beef',
                'Payless Instant Mami Beef', 'Nissin Cup Noodles Seafood'
            ],
            'Pantry' => [
                'Silver Swan Soy Sauce 200ml', 'Datu Puti Vinegar 200ml', 'Magic Sarap Sachet 8g',
                'UFC Banana Ketchup 200g', 'Mang Tomas All-Purpose Sauce', 'AJI-NO-MOTO MSG 10g',
                'Golden Fiesta Cooking Oil pouch', 'Bariw Sugar Refined 1/4kg'
            ],
            'Personal Care' => [
                'Sunsilk Smooth & Manageable Shampoo', 'Cream Silk Conditioner Pink', 'Head & Shoulders Cool Menthol',
                'Safeguard Pure White Soap', 'Palmolive Naturals Green Soap', 'Colgate Great Regular Toothpaste',
                'Close-Up Red Hot Sachet', 'Rexona Men Deodorant Sachet'
            ],
            'Snacks' => [
                'Piattos Cheese Small', 'Chippy Barbecue Large', 'Nova Country BBQ',
                'Clover Chips Cheese', 'Oishi Prawn Crackers', 'Boy Bawang Garlic',
                'Fudgee Barr Chocolate', 'SkyFlakes Crackers Pack', 'Rebisco Crackers Plain'
            ],
        ];

        return [
            'product_name' => fake()->randomElement([$allItems]),
            'category'
        ];
    }
}
