<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupPost extends Model
{
    use HasFactory;
    
    protected $fillable = ['description', 'image', 'video','year', 'group_id', 'user_id'];
    
     // Relationship to GroupReports
     public function groupReports()
     {
         return $this->morphMany(GroupReport::class, 'reportable');
     }

   

}
