<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;
    // use Sushi\Sushi;
    protected $rows = [
        [
            'name' => 'mango',
            'price' => 10,
        ],
        [
            'name' => 'apple',
            'price' => 15,
        ],
        [
            'name' => 'banana',
            'price' => 10,
        ],
        [
            'name' => 'orange',
            'price' => 5,
        ]
    ];
    public static function all($columns = ['*'])
    {
        return collect((new static)->rows);
    }
}
