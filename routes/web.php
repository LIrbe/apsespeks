<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ObjektuController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

/* ATCERIES KA ROUTE LASA NO AUGŠAS UN JA IZMANTO MAINĪGOS, TAD PIEM. "jauns" VAR UZTVERT KĀ RAKSTA ID*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return redirect()->route('welcome');
})->name('home');

/* Auth */

Route::middleware('auth')->controller(RegisterController::class)->group(function () {
    Route::get('/register', 'registerPage')->name('register.page');

    Route::post('/register', 'register')->name('register');
});

Route::middleware('guest')->controller(LoginController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('login.page');

    Route::post('/login', 'login')->name('login');
});

Route::post('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/users', [UserController::class,'index'])->name('auth.index')->middleware('auth');

/* Misc */

Route::get('/kontakti', function () {
    return view('contacts');
});

Route::get('/projekts', function () {
    return view('euproj');
})->name('project');

/*Darbības Virzieni*/


Route::middleware('auth')->controller(ShopController::class)->group(function () {
    Route::get('/piedāvājumi/{raksts}/edit', 'edit')->name('shop.edit');

    Route::put('/piedāvājumi', 'update')->name('shop.update');

    Route::delete('/piedāvājumi/{raksts}', 'destroy')->name('shop.delete');

    Route::get('/piedāvājumi/jauns',  'create')->name('shop.create');

    Route::post('/piedāvājumi',  'store')->name('shop.store');
});

Route::get('/piedāvājumi', [ShopController::class,'index'])->name('shop.index');

Route::get('/piedāvājumi/{raksts}', [ShopController::class,'show'])->name('shop.show');

/*Blogs*/


Route::middleware('auth')->controller(BlogController::class)->group(function () {
    Route::get('/raksti/jauns',  [BlogController::class, 'create'])->name('blog.create');

    Route::get('/raksti/{raksts}/edit', 'edit')->name('blog.edit');

    Route::put('/raksti', 'update')->name('blog.update');

    Route::delete('/raksti/{raksts}', 'destroy')->name('blog.delete');

    Route::post('/raksti',  'store')->name('blog.store');
});

Route::get('/raksti', [BlogController::class,'index'])->name('blog.index');

Route::get('/raksti/{raksts}', [BlogController::class,'show'])->name('blog.show');

/*Route::get('/vesture', function () {
    return view('history');
})->name('history');
*/

/* Objekti */


Route::middleware('auth')->controller(ObjektuController::class)->group(function () {
    Route::get('/objekti/jauns', 'create')->name('objekti.create');

    Route::post('/objekti', 'store')->name('objekti.store');

    Route::get('/objekti/{objekts}/edit', 'edit')->name('objekti.edit');

    Route::put('/objekti/{objekts}', 'update')->name('objekti.update');

    Route::delete('/objekti/{objekts}', 'delete')->name('objekti.delete');

});

Route::get('/objekti', [ObjektuController::class,'index'])->name('objekti.index');

Route::get('/objekti/{objekts}', [ObjektuController::class,'show'])->name('objekti.show');

/* Galerija */

Route::get('/galerija', [ImageController::class,'index'])->name('gallery.index');

Route::middleware('auth')->controller(ImageController::class)->group(function () {
});

/* Rezervācijas */

Route::get('/rezervacijas', function() {
    return view('bookings.main');
});

Route::middleware('auth')->controller(BookingController::class)->group(function () {
});