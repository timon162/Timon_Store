<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;


Route::get('/home', [AdminController::class, 'viewAdminHome'])->name('admin.home');
Route::get('/category-style/{id}', [AdminController::class, 'viewCategoryStyle'])->name('category-style');
Route::get('/set-product/{id}', [AdminController::class, 'viewSetProduct'])->name('set-product');
Route::get('/detail-product/{id}', [AdminController::class, 'viewDetailProduct'])->name('detail-product');

Route::get('/test', function () {
    $repo = app(\App\Repositories\ProductRepository::class);
    $sevice = app(\App\Services\ProductService::class);

    $dataRepo = $sevice->findProductById(3);

    return response()->json($dataRepo);
});
