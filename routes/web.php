<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubSubcategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

// Group Category - > prefix - >name foreach route
//subcategories
Route::prefix('categories')->group(function(){
    

     Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
     Route::get('/{id}', [CategoryController::class, 'show'])->name('categories.show');
     Route::post('/', [CategoryController::class, 'create'])->name('categories.create');
     Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
    
});

Route::prefix('sub-subcategories')->group(function () {
    Route::get('/', [SubSubcategoryController::class, 'index'])->name('sub-subcategories.index');
    Route::get('/{id}', [SubSubcategoryController::class, 'show'])->name('sub-subcategories.show');
    Route::post('/', [SubSubcategoryController::class, 'create'])->name('sub-subcategories.create');
    Route::put('/{id}', [SubSubcategoryController::class, 'update'])->name('sub-subcategories.update');
});


Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::post('/', [ProductController::class, 'create'])->name('products.create');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
});