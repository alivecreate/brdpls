<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['description', 'gallery', 'visibility','user_id', 'status' =>1];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
