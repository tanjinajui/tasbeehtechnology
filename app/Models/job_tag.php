<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class job_tag extends Model
{
    protected $fillable = [
        'job_listing_id','tag_id'
    ];
}
