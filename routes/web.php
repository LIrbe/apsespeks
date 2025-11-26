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

Route::get('/raksti', [BlogController::class,'index'])->name('blog.index');

Route::get('/raksti/jauns', [BlogController::class, 'create'])->name('blog.create');

Route::post('/raksti', [BlogController::class, 'store'])->name('blog.store');

Route::get('/raksti/{raksts}', [BlogController::class,'show'])->name('blog.show');

Route::get('/raksti/{raksts}/edit', [BlogController::class,'edit'])->name('blog.edit');

Route::put('/raksti/{raksts}', [BlogController::class,'update'])->name('blog.update');

Route::delete('/raksts/{raksts}', [BlogController::class,'delete'])->name('blog.delete');

Route::get('/vesture', function () {
    return view('history');
});