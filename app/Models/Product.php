<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Define fillable fields and a belongs-to relationship with the Category model
    
    protected $fillable = ['name', 'category', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}