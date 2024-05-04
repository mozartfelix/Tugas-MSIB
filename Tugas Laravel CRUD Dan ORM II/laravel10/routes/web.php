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

Route::get('/products', [ProductController::class, 'getIndex'])->name('index');
Route::get('/admin/list-products', [ProductController::class, 'getListProducts'])->name('list_products');
// Route::post('/admin/list-products', [ProductController::class, 'postForm'])->name('post_form');

// create
Route::get('/tambah-product', [ProductController::class, 'getForm'])->name('form');
Route::post('/tambah-product', [ProductController::class, 'postForm'])->name('post_form');

// update
Route::get('/admin/update-product/{id}', [ProductController::class, 'getUpdateForm'])->name('update_form');
Route::patch('/admin/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update_product');
Route::post('/admin/update-product/{id}', [ProductController::class, 'submitUpdatedProduct'])->name('submit_updated_product');

//delete
Route::delete('/product/{id}', [ProductController::class, 'deleteProduct'])->name('delete');
