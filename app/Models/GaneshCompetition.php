<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaneshCompetition extends Model
{
    use HasFactory;

    
    protected $table = 'ganesh_competition';
    
    protected $fillable = [
        'competition_type', 
        'name', 
        'description', 
        'slug', 
        'status', 
        'participant_id', 
        'participant_type'
    ];

    public function participant()
    {
        return $this->morphTo();
    }

    // public function votes()
    // {
    //     return $this->morphMany(CompetitionVote::class, 'votable');
    // }

    public function votes()
    {
        return $this->hasMany(CompetitionVote::class, 'competition_id')->where('competition_category_id', 1); // Adjust the relationship as per your schema
        return $this->morphMany(CompetitionVote::class, 'votable'); // Adjust the relationship as per your schema
    }
    
    public function voteCategory1()
    {
        return $this->hasMany(CompetitionVote::class, 'competition_id')->where('competition_category_id', 1); // Adjust the relationship as per your schema
    }
    public function voteCategory2()
    {
        return $this->hasMany(CompetitionVote::class, 'competition_id')->where('competition_category_id', 2); // Adjust the relationship as per your schema
    }
    public function voteCategory3()
    {
        return $this->hasMany(CompetitionVote::class, 'competition_id')->where('competition_category_id', 3); // Adjust the relationship as per your schema
    }

    public function isVoted($userId)
    {
        // return $this->votes()->where('user_id', 21)->exists();
        return $this->votes()->where('user_id', $userId); // Adjust the relationship as per your schema
        return $this->morphMany(CompetitionVote::class, 'votable'); // Adjust the relationship as per your schema
    }

    
    public function votesForCat1()
    {
        return $this->morphMany(CompetitionVote::class, 'votable')
                    ->where('competition_votes.competition_category_id', 1);
    }

    
    public function countVote($competition_id, $category_id)
    {
        return CompetitionVote::where(['competition_id' => $competition_id, 'competition_category_id' => $category_id])->count();

        return $this->morphMany(CompetitionVote::class, 'votable')
                    ->where('competition_votes.competition_category_id', 1);
    }

    
    // public function isVoted($competition_id, $category_id)
    // {

    //     return CompetitionVote::where(['competition_id' => $competition_id, 'competition_category_id' => $category_id])->count();

    //     return $this->morphMany(CompetitionVote::class, 'votable')
    //                 ->where('competition_votes.competition_category_id', 1);
    // }

    
public function competitionVotes()
{   
    return $this->morphMany(CompetitionVote::class, 'votable');
}


public function competition($id)
{
    return GaneshCompetition::where('participant_id', $id)->first();

}


public function delete()
{
    $this->competitionVotes()->delete();
    parent::delete();
}


    


    // Method to count total votes
    public function totalVotes($competition_category_id, $votable_id)
    {
        // dd($user_id, $votable_id);
        // return 50;
        return CompetitionVote::where(['votable_id' => $votable_id])->get()->count();
        return $this->votes()->count();
    }


}
