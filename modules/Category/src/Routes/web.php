<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/category', [\Rsruman\Category\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [\Rsruman\Category\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/child-category', [\Rsruman\Category\Controllers\CategoryController::class, 'child_category'])->name('category.child_category');
});
