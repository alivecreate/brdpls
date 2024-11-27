<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'user_id',
        'review',
        'rating',
    ];

    /**
     * Relationship with Business.
     */
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    /**
     * Relationship with User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
