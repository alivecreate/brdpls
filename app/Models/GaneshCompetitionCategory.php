<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaneshCompetitionCategory extends Model
{
    use HasFactory;
    protected $table = 'ganesh_competition_category';

    protected $fillable = [
        'name',
        'name_e',
        'rules',
        'slug',
    ];
}
