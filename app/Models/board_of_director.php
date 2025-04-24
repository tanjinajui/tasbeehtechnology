<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class board_of_director extends Model
{
    protected $fillable = [
        'no_of_director',
        'photo',
        'name',
        'email',
        'message'  
    ];
}
