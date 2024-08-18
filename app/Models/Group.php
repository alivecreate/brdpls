<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = ['name', 'description', 'category', 'privacy', 'cover', 'year', 'location', 'city', 'user_id', 'slug','status'];

    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($group) {
            $group->group_code = generateRandomNumericString(10);
            $group->status = 'active';
        });
        
        // static::creating(function ($model) {
        //     do {
        //         $model->id = generateRandomNumericString(10); // Adjust the length as needed
        //     } while (DB::table($model->getTable())->where('id', $model->id)->exists());
        // });

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

}
