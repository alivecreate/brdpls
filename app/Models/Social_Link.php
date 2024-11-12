<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_Link extends Model
{
    use HasFactory;

    protected $table = 'social_links';

    protected $fillable = ['facebook', 'instagram', 'twitter', 'youtube', 'linkedin', 'pinterest', 'user_id', 'status' =>1];


    // Mutator to ensure URL starts with "https://"
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
        dd($url);
        
        return $url;
    }
    
}
