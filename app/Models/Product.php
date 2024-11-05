<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'description', 'image', 'status', 'price', 'items', 'unit', 'slug', 'business_id', 'product_category_id'];


    
    protected static function boot()
    {
        
    parent::boot();

    static::creating(function ($item) {
        $slug = Str::slug($item->name);
        $originalSlug = $slug;
        
        // Generate a unique 4-digit random number
        $uniqueString = '-' .strtolower(Str::random(6));
    
        // Append the unique 4-digit number to the slug
        $slug .= $uniqueString;
    
        // Check if the generated slug exists, and if so, keep appending a new random string
        while (static::whereSlug($slug)->exists()) {
            $uniqueString = '-' . str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
            $slug = $originalSlug . $uniqueString;
        }
    
        $item->slug = $slug;
    });
}



    public function category()
    {
        // return $this->belongsTo(ProductCategory::class);
        return $this->belongsTo(ProductCategory::class, 'product_category_id'); // Assuming user_id is the foreign key in the groups table
    }
}