<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupReports extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id', 'reportable_id', 'reportable_type', 'user_id', 'image', 'reason', 'description', 'note' , 'status'
    ];

    // Relationship to User (reporting user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Polymorphic relationship to reportable entities (Group in this case)
    public function reportable()
    {
        return $this->morphTo();
    }

}
