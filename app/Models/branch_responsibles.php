<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class branch_responsibles extends Model
{
    protected $fillable = [
        'branch_name',
        'photo',
        'name',
        'email',
        'contact_no'  
    ];
}
