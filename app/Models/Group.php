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
        
        // static::creating(function ($group) {
        //     $slug = Str::slug($group->name);
        //     $originalSlug = $slug;
        //     $count = 1;

        //     while (static::whereSlug($slug)->exists()) {
        //         $slug = $originalSlug . '-' . $count++;
        //     }
        //     $group->slug = $slug;
        // });

        static::creating(function ($group) {
            $slug = Str::slug($group->name);
            $originalSlug = $slug;
            
            // Generate a unique 4-digit random number
            $uniqueString = '-' .strtolower(Str::random(6));
        
            // Append the unique 4-digit number to the slug
            $slug .= $uniqueString;
        
            // Check if the generated slug exists, and if so, keep appending a new random string
            while (static::whereSlug($slug)->exists()) {
                $uniqueString = '-' . str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
                $slug = $originalSlug . $uniqueString;
            }
        
            $group->slug = $slug;
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

public function user()
{
    return $this->belongsTo(User::class, 'user_id'); // Assuming user_id is the foreign key in the groups table
}


public function myCompetition()
{
    return $this->morphMany(GaneshCompetition::class, 'participant');
}


public function competition($id)
{
    return GaneshCompetition::where(['participant_id' => $id, 'status' => 'active'])->first();

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
