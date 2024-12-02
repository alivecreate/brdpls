<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessInquiry extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'business_id',
        'user_id',
        'name',
        'phone',
        'email',
        'title',
        'message',
    ];

    public function business()
{
    return $this->belongsTo(Business::class);
}


}
