<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class ProductCategory extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'slug'];

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
            $uniqueString = '-' . str_pad(mt_rand(0, 99), 4, '0', STR_PAD_LEFT);
            $slug = $originalSlug . $uniqueString;
        }
    
        $item->slug = $slug;
    });
}


    public function products()
    {
        // return $this->hasMany(Product::class);
    }
    
}
