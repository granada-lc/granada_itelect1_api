<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function products($id){  // Get products by category ID

        $category = Category::find($id);// Find category by ID
           
             if(!$category)  // If category not found 
        
               return response()->json(['message' => 'Category not found'], 404); // Return 404 error

               return response()->json($category->products()->paginate(15), 200);  // Return paginated products

    }
}