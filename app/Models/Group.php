<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;


class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = ['name', 'decoration', 'description', 'cid', 'category', 'privacy', 'cover', 'year', 'address', 'city', 'user_id', 'slug','status'];

    
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

    public function members()
    {
        return $this->hasMany(GroupMember::class);
    }

     // Relationship to GroupReports
     public function reports()
     {
         return $this->morphMany(GroupReports::class, 'reportable');
     }

     
public function gallery($limit = null)
{
    return $this->morphMany(BusinessGallery::class, 'imageable')->orderBy('id', 'desc')->limit($limit);
}

public function competitions()
{
    return $this->morphMany(GaneshCompetition::class, 'participant');
    
}


public function myCompetition()
{
    return $this->morphMany(GaneshCompetition::class, 'participant');
}


public function competition($id)
{
    return GaneshCompetition::where('participant_id', $id)->first();

    return GaneshCompetition::where('participant_id', $id)->first();
}

public function checkCompetitionVote($id)
{
    return GaneshCompetition::where('participant_id', $id)->first();
}


public function delete()
{
    $this->competitions()->delete();
    parent::delete();
}


}
