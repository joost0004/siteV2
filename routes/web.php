<?php

use Illuminate\Support\Facades\Route;

// Application controllers
use App\Http\Controllers\ArticleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
})->middleware(['auth'])->name('dashboard');

Route::get('/500', function () {
    return view('errors.500');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/articles', ArticleController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
