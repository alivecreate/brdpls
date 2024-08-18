<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupPostLike extends Model
{
    use HasFactory;

    protected $fillable = ['likes', 'group_post_id', 'user_id'];

}
