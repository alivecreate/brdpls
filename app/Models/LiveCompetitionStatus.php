<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveCompetitionStatus extends Model
{
    use HasFactory;

    protected $table = 'live_competition_status';
    protected $fillable = [
        'status', 'start_time', 'end_time'
    ];

}
