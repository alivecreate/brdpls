<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessTiming extends Model
{
    use HasFactory;
    
    protected $table = 'business_timing';

    protected $fillable = ['business_id', 'day', 'open_time', 'close_time', 'open_24hrs', 'closed'];
}
