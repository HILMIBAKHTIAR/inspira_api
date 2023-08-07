<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player_skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
        'player_id',
        'skill_id'
    ];
}
