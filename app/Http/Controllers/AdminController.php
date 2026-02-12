<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Interfaces\CategoryInterfaceService;
use App\Services\Interfaces\ProductInterfaceService;
use App\Services\Interfaces\PartialInterfaceService;
use App\Services\Interfaces\SupplierInterfaceService;

class AdminController extends Controller
{
    public function __construct(
        protected CategoryInterfaceService $categoryService,
        protected ProductInterfaceService $productService,
        protected PartialInterfaceService $partialService,
        protected SupplierInterfaceService $supplierService
    ) {}

    public function viewAdminHome()
    {
        $imgBannerAdminHome = $this->partialService->imgBannerAdminHome();
        $hotProduct = $this->productService->getHotProduct();

        return view('admins.contents.homes.content_home', compact('imgBannerAdminHome', 'hotProduct'));
    }

    public function viewCategoryStyle(int $id)
    {
        $supplier = $this->supplierService->getAllSupplierByCategoryStyleId($id);
        $product = $this->productService->getLimitProductByCategoryStyleId($id);

        return view('admins.contents.category_styles.categoty_style_page', compact('supplier', 'product'));
    }

    public function viewSetProduct(int $id)
    {
        $supplier = $this->supplierService->getDefaultSupplier();
        $product = $this->productService->getLimitSetProductByAlbumId($id);

        return view('admins.contents.category_styles.categoty_style_page', compact('supplier', 'product'));
    }

    public function viewDetailProduct(int $id)
    {
        $detailProduct  = $this->productService->findProductById($id);

        $relatedProduct = $this->productService->getRelatedProducts($id);

        $optionProduct = $this->productService->getOptionProductById($id);

        return view('admins.contents.detail_products.detail_product_page', compact('detailProduct', 'relatedProduct', 'optionProduct'));
    }
}
