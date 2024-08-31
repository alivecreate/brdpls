<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'item_no',
        'first_name',
        'last_name',
        'phone',
        'phone_verified_at',
        'password',
        'username',
        'email',
        'otp',
        'cid',
        'bio',
        'gender',
        'status',
       'relationship',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'phone_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function ganeshCompetitions()
    {
        return $this->morphMany(GaneshCompetition::class, 'participant');
    }
    
    public function votes()
    {
        return $this->hasMany(CompetitionVote::class);
    }

    
    public function checkCompetitionVoted()
    {
        // return 
        return $this->hasMany(CompetitionVote::class);
    }

    public function hasUserVotedForCategory($categoryId)
{
    $userId = Auth::id(); // Get the currently authenticated user's ID

    // Check if the user has already voted in the specified category
    $hasVoted = CompetitionVote::where('user_id', $userId)
        ->where('competition_category_id', $categoryId)
        ->exists();

    return $hasVoted;
}

}
