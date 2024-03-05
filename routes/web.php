<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $name  = "Yan";
    $age  = 21;
    $job = "Full Stack Developer & Mobile";
    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90];
    $names = ["Yan", "Kaiky", "Augusto", "Miles", "Carlos", "Eliza", "Jacira"];

    return view('welcome', [
        "name" => $name,
        "age" => $age,
        "job" => $job,
        "array" => $array,
        "names" => $names
    ]);
});

Route::get('/products', function () {
    $search = request('search');
    
    return view('products', ["search" => $search]);
});

Route::get('/productss/{id?}', function (int $id = null) {
    return view('product', ['id' => $id]);
});
