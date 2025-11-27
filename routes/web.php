<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ObjektuController;
use App\Http\Controllers\ImageController;

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

/*Vērtības*/

Route::get('/raksti', [BlogController::class,'index'])->name('blog.index');

Route::get('/raksti/jauns', [BlogController::class, 'create'])->name('blog.create');

Route::post('/raksti', [BlogController::class, 'store'])->name('blog.store');

Route::get('/raksti/{raksts}', [BlogController::class,'show'])->name('blog.show');

Route::get('/raksti/{raksts}/edit', [BlogController::class,'edit'])->name('blog.edit');

Route::put('/raksti/{raksts}', [BlogController::class,'update'])->name('blog.update');

Route::delete('/raksts/{raksts}', [BlogController::class,'delete'])->name('blog.delete');

Route::get('/vesture', function () {
    return view('history');
})->name('history');

/* Objekti */

Route::get('/objekti', [ObjektuController::class,'index'])->name('objekti.index');

Route::get('/objekti/jauns', [ObjektuController::class, 'create'])->name('objekti.create');

Route::post('/objekti', [ObjektuController::class, 'store'])->name('objekti.store');

Route::get('/objekti/{objekts}', [ObjektuController::class,'show'])->name('objekti.show');

Route::get('/objekti/{objekts}/edit', [ObjektuController::class,'edit'])->name('objekti.edit');

Route::put('/objekti/{objekts}', [ObjektuController::class,'update'])->name('objekti.update');

Route::delete('/objekts/{objekts}', [ObjektuController::class,'delete'])->name('objekti.delete');

/* Galerija */

Route::get('/galerija', [ImageController::class,'index'])->name('gallery.index');

/* Rezervācijas */

Route::get('/rezervacijas', function() {
    return view('bookings.main');
});

/* Pārējais */

Route::get('/kontakti', function () {
    return view('contacts');
});
