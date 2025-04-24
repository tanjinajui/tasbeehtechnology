<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class department_responsibles extends Model
{
    protected $fillable = [
        'department_name',
        'photo',
        'name',
        'email',
        'contact_no'  
    ];
}
