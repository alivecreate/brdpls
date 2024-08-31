<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\GaneshCompetitionCategory;

class CompetitionVote extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id',
        'competition_category_id',
        'participant_id',
        'participant_type',
        'votable_id',
        'votable_type',
    ];
    
    
    public function votable()
    {
        return $this->morphTo();
    }

    public function participant()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ganeshCompetitionCategory()
    {
        return $this->belongsTo(GaneshCompetitionCategory::class);
    }

}
