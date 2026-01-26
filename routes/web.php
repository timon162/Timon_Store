<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;

Route::get('/home', [AdminController::class, 'viewAdminHome']);
Route::get('/category-style/{id}', [AdminController::class, 'viewCategoryStyle'])->name('category-style');

Route::get('/test', function () {
    $repo = app(\App\Repositories\SupplierRepository::class);
    $sevice = app(\App\Services\CategoryService::class);

    $dataRepo = $sevice->groupCategoryName();

    return response()->json($dataRepo);
});
