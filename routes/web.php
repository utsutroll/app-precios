<?php

use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PresentationsController;
use App\Http\Controllers\Admin\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('categories', CategoriesController::class)->except('show')->names('admin.categories');
Route::resource('brands', BrandsController::class)->except('show')->names('admin.brands');
Route::resource('presentations', PresentationsController::class)->except('show')->names('admin.presentations');
Route::resource('products', ProductsController::class)->names('admin.products');
Route::get('/products-price', [ProductsController::class, 'products'])->name('products-price');
Route::get('/margin-brand', [BrandsController::class, 'marginBrand'])->name('margin-brand');
Route::get('/margin-category', [CategoriesController::class, 'marginCategory'])->name('margin-category');