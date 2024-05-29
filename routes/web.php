<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);

// Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);
// Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create']);
// Route::post('/product/store', [\App\Http\Controllers\ProductController::class, 'store']);
// Route::get('/product/edit{id}', [\App\Http\Controllers\ProductController::class, 'edit']);
// Route::get('/product/update{id}', [\App\Http\Controllers\ProductController::class, 'update']);
// Route::delete('/product/delete{id}', [\App\Http\Controllers\ProductController::class, 'delete']);

Route::resource('product', \App\Http\Controllers\ProductController::class);

// Route::controller(\App\Http\Controllers\ProductController::class)->group(function () {
//     Route::get('/product', 'index');
//     Route::get('/product', 'index');
// });


