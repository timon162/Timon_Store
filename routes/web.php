<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;

Route::get('/home', [AdminController::class, 'viewAdminHome']);

Route::get('/test', function () {
    $repo = app(\App\Repositories\ProductRepository::class);
    $sevice = app(\App\Services\ProductService::class);

    $dataRepo = $sevice->getHotProduct();

    return response()->json($dataRepo);
});
