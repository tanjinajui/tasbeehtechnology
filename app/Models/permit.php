<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permit extends Model
{
    /** @use HasFactory<\Database\Factories\PermitFactory> */
    use HasFactory;
    protected $fillable = ['serial_no','nip_no'];
}
