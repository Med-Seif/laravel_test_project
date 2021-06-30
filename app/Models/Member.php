<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;
    use HasFactory;


    public function team()
    {
        return $this->hasOne(Team::class, 'id','team_id');
    }
}
