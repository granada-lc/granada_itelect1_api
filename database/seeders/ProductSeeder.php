<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
       $products = [
    ['Leather Wallet', 'Stylish and durable wallet with multiple card slots and a sleek design.'],
    ['Sunglasses', 'UV protection sunglasses with a trendy frame for summer outings.'],
    ['Wristwatch', 'Elegant timepiece with a classic design and precision movement.'],
    ['Silk Scarf', 'Luxurious silk scarf that adds a touch of elegance to any outfit.'],
    ['Canvas Backpack', 'Durable and spacious backpack perfect for daily use or travel.'],
    ['Belt', 'Classic leather belt with a polished buckle, ideal for formal or casual wear.'],
    ['Baseball Cap', 'Casual cap with adjustable strap, perfect for sunny days.'],
    ['Earrings', 'Stylish hoop earrings that complement both casual and formal attire.'],
    ['Bracelet', 'Chic bracelet made of beads and charms, adds personality to any outfit.'],
    ['Necklace', 'Delicate necklace featuring a minimalist pendant, perfect for layering.'],
    ['Headband', 'Fashionable headband that keeps hair in place while adding flair.'],
    ['Gloves', 'Warm and cozy gloves made from soft fabric, perfect for winter.'],
    ['Socks', 'Comfortable and colorful socks that brighten up any outfit.'],
    ['Tote Bag', 'Spacious tote bag made from eco-friendly materials, perfect for shopping.'],
    ['Beanie', 'Warm knitted beanie that adds style and comfort during colder months.'],
    ['Cufflinks', 'Elegant cufflinks that enhance the sophistication of any dress shirt.'],
    ['Hair Clips', 'Stylish hair clips that keep hair tidy while adding a decorative touch.'],
    ['Ankle Boots', 'Chic ankle boots that pair well with various outfits for a trendy look.'],
    ['Travel Umbrella', 'Compact and lightweight umbrella that provides protection from rain.'],
    ['Fanny Pack', 'Trendy fanny pack for hands-free convenience during outings.'],
];

        foreach ($products as $index => $data) {
            Product::create([
                'name' => $data[0],
                'description' => $data[1],
                'category_id' => rand(1, 4), 
                'user_id' => $index % 2 === 0 ? 1 : 2,
                'price' => rand(100, 30000),
                'image_path' => null, 
            ]);
        }
    }
}