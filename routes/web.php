<?php

use App\Http\Controllers\ProductController;
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
// route for create
Route::get('/add-product', [ProductController::class,'create'])->name('product.create');

// route for index
Route::get('/all-product', [ProductController::class,'index'])->name('product.index');

// route for store
Route::post('/store-product', [ProductController::class,'store'])->name('product.store');

// route for show
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product.show');

// Display the edit form
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

// route update the product
Route::post('/product/update/{id}',[productController::class, 'update'])->name('product.update');

// route delete the product
Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
