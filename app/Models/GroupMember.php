<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    use HasFactory;

    protected $fillable = ['group_id', 'user_id', 'status', 'created_at'];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($groupMember) {
            $groupMember->status = 'active';
        });
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
     // Relationship to GroupReports
     public function groupReports()
     {
         return $this->morphMany(GroupReport::class, 'reportable');
     }
}
