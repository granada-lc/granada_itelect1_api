<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
    // Create 50 products with random category and price, where price is between 100 and 100
    
      for($i=1; $i <= 50; $i++){
          Product::create([
             'name' => "Product $i",
             'category_id' => rand(1,5),
             'price' => 100
          ]);
      }
    }
}
