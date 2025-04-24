<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jobs extends Model{
    use HasFactory;
    protected $table = 'users';
    // public static function all(): array
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' =>'CEO',
    //             'salary' => '$50000'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' =>'Developer',
    //             'salary' => '$40000'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' =>'Teacher',
    //             'salary' => '$30000'
    //         ],
    //     ];
    // }
}
    

