<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSocialLink extends Model
{
    use HasFactory;
    protected $table = 'business_social_links';
    protected $fillable = ['business_id', 'facebook' ,'instagram' ,'twitter', 'linkedin', 'youtube' ,'pinterest'];
}
