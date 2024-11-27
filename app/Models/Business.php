<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;


class Business extends Model
{
    use HasFactory;

    protected $table = 'business';
    protected $fillable = ['name_prefix', 'contact_person', 'cid', 'name', 'description', 'business_type', 'phone1', 'phone2', 'whatsapp1', 'whatsapp2', 'email1', 'email2', 'website', 'building', 'street', 'landmark', 'city', 'state', 'pincode', 'gst', 'country', 'establishment_year', 'user_id', 'slug','status', 'deleted_at'];
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($business) {
            $slug = Str::slug($business->name);
            $originalSlug = $slug;
            $count = 1;

            while (static::whereSlug($slug)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }
            $business->slug = $slug;
        });
    }

    public function timings()
    {
        return $this->hasMany(BusinessTiming::class);
    }

    public function categories()
{
    return $this->belongsToMany(Category::class, 'business_category', 'business_id', 'category_id');
}

public function categoryNames()
{
    // return $this->categories()->pluck('name')->toArray();
    return $this->belongsToMany(Category::class, 'business_category', 'business_id', 'category_id')->select('categories.name');
}

public function socialLinks()
    {
        return $this->hasOne(BusinessSocialLink::class, 'business_id');
    }


public function categoryIds()
{
    return $this->belongsToMany(Category::class, 'business_category', 'business_id', 'category_id')
                ->pluck('category_id')
                ->implode(',');
}

public function gallery($limit = null)
{
    return $this->morphMany(BusinessGallery::class, 'imageable')->orderBy('id', 'desc')->limit($limit);
}

public function products($limit = null)
{
    return $this->hasMany(Product::class, 'business_id')->orderBy('id', 'desc')->limit($limit);
}

public function reviews($limit = null)
{
    return $this->hasMany(BusinessReview::class, 'business_id')->orderBy('id', 'desc')->limit($limit);
}


public function setWebsiteAttribute($value)
{
    $this->attributes['website'] = $this->ensureHttps($value);
}

  // Helper function to check and add https if necessary
  private function ensureHttps($url)
  {
      if ($url && !preg_match('/^https?:\/\//', $url)) {
          return 'https://' . $url;
      }
      
      return $url;
  }


}

