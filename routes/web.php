<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::post('/imageUpload', [App\Http\Controllers\ProfileController::class, 'imageUpload'])->name('imageUpload');
// Route::resource('/products', ProductController::class);

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/productsCreate', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::post('/productsStore', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');