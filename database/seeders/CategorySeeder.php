<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define an array of category names
        $categories = ['Clothing', 'Beauty', 'Gadgets', 'Shoes', 'Accessories'];
           foreach ($categories as $name){   
               Category::created(['name'=> $name]);
           }
    }
}
