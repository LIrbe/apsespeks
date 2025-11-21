<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return view('welcome');
});

Route::get('/raksti', function () {
    return view('blog');
});

Route::get('/vesture', function () {
    return view('history');
});

Route::get('/raksti/create', [BlogController::class, 'create']);
Route::post('/raksti', [BlogController::class, 'store']);

Route::get('/raksti/jauns', function() {
    return view('blog/create');
});