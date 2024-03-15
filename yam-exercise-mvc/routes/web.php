<?php
use App\Models\Fruit;
use App\Http\Controllers\FruitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myview/{user}', function ($user) {
    return view('home', ['username' => $user]);
});

Route::get('/fruits', function() {
    return Fruit::all();
});

Route::get('/showFruits', [FruitController::class, 'getAllFruit']);