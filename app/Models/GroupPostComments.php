<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupPostComments extends Model
{
    use HasFactory;

    protected $fillable = ['comments', 'group_post_id', 'user_id',  'status' =>1];


     // Relationship to GroupReports
     public function groupReports()
     {
         return $this->morphMany(GroupReport::class, 'reportable');
     }
}
