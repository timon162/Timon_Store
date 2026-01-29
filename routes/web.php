<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;


Route::get('/home', [AdminController::class, 'viewAdminHome'])->name('admin.home');
Route::get('/category-style/{id}', [AdminController::class, 'viewCategoryStyle'])->name('category-style');
Route::get('/set-product/{id}', [AdminController::class, 'viewSetProduct'])->name('set-product');

Route::get('/test', function () {
    $repo = app(\App\Repositories\ProductRepository::class);
    $sevice = app(\App\Services\SupplierService::class);

    $dataRepo = $sevice->getDefaultSupplier();

    return response()->json($dataRepo);
});
