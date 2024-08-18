<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    use HasFactory;

    protected $table = 'security';

    protected $fillable = ['current_password', 'new_password', 'repeat_password', 'authentication', 'user_id', 'status' =>1];


}
