<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model

{
    public $confirmMadrasaDeletion=false;

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'country_id',
        'division_id',
        'district_id',
        'upazila_id',
        'address',
        'phone_number',
        'email',
        'website',
        'logo',
        'established',
        'education_level',
        'education_medium',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
