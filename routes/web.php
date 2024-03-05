<?php

use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'store']);

Route::get('/products', function () {
    $search = request('search');

    return view('products', ["search" => $search]);
});

Route::get('/productss/{id?}', function (int $id = null) {
    return view('product', ['id' => $id]);
});
