<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_Link extends Model
{
    use HasFactory;

    protected $table = 'social_links';

    protected $fillable = ['facebook', 'instagram', 'twitter', 'youtube', 'github', 'user_id', 'status' =>1];
}
