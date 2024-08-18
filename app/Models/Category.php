<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['name', 'description', 'image', 'icon', 'status', 'parent_id'];


    public function businesses() 
{
    // return $this->belongsToMany(Category::class, 'business_category');
    return $this->belongsToMany(Business::class, 'business_category', 'category_id', 'business_id');
}



}

