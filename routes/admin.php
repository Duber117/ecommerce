<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::view('/families', 'admin.families')->name('families');
Route::view('/categories', 'admin.categories')->name('categories');
Route::view('/subcategories', 'admin.subcategories')->name('subcategories');
Route::view('/products', 'admin.products')->name('products');
