<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;

    protected $table = 'password_resets';

    // Disable timestamps if not using them in this table

    // Allow mass assignment for the fields
    protected $fillable = ['otp', 'otp_expires_at', 'user_id', 'status'];

    /**
     * Define the relationship to the User model
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
