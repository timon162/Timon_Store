<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Interfaces\CategoryInterfaceService;
use App\Services\Interfaces\ProductInterfaceService;
use App\Services\Interfaces\PartialInterfaceService;

class AdminController extends Controller
{
    public function __construct(
        protected CategoryInterfaceService $categoryService,
        protected ProductInterfaceService $productService,
        protected PartialInterfaceService $partialService
    ) {}

    public function viewAdminHome()
    {
        $imgBannerAdminHome = $this->partialService->imgBannerAdminHome();
        $hotProduct = $this->productService->getHotProduct();

        return view('admins.contents.homes.content_home', compact('imgBannerAdminHome', 'hotProduct'));
    }
}
