<?php

namespace App\Http\Controllers;
use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function getAllFruit()
    {
        $fruits = Fruit::all();
        return view ('fruits', ['fruits' => $fruits]);
    }
}
