<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessGallery extends Model
{
    use HasFactory;
    
    protected $table = 'business_gallery';


    protected $fillable = ['business_id', 'category_id', 'image', 'video', 'created_at', 'updated_at', ];

    
    public function imageable()
    {
        return $this->morphTo();
    }

}
