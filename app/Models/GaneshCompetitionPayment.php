<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaneshCompetitionPayment extends Model
{
    use HasFactory;

    protected $table = 'ganesh_competition_payment';

    // Define the fillable attributes
    protected $fillable = ['group_id', 'competition_id', 'user_id', 'receipt', 'amount', 'status'];

    /**
     * Relationship with the Group model.
     */
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    /**
     * Relationship with the GaneshCompetition model.
     */
    public function competition()
    {
        return $this->belongsTo(GaneshCompetition::class, 'competition_id');
    }

    /**
     * Relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
