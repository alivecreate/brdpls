<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSocialLink extends Model
{
    use HasFactory;
    protected $table = 'business_social_links';
    protected $fillable = ['business_id', 'facebook' ,'instagram' ,'twitter', 'linkedin', 'youtube' ,'pinterest'];

    public function setFacebookAttribute($value)
    {
        $this->attributes['facebook'] = $this->ensureHttps($value);
    }

    public function setInstagramAttribute($value)
    {
        $this->attributes['instagram'] = $this->ensureHttps($value);
    }

    public function setTwitterAttribute($value)
    {
        $this->attributes['twitter'] = $this->ensureHttps($value);
    }

    public function setYoutubeAttribute($value)
    {
        $this->attributes['youtube'] = $this->ensureHttps($value);
    }

    public function setLinkedinAttribute($value)
    {
        $this->attributes['linkedin'] = $this->ensureHttps($value);
    }

    public function setPinterestAttribute($value)
    {
        $this->attributes['pinterest'] = $this->ensureHttps($value);
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
