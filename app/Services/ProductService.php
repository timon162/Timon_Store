<?php

namespace App\Services;

use App\Services\Interfaces\ProductInterfaceService;
use App\Repositories\Interfaces\ProductInterfaceRepository;
use App\Utils\MapperSetProductUtil;
use App\Utils\MapperAlbumUtil;
use App\Constants\GenderConstant;
use App\Utils\MapperProductUtil;

class ProductService implements ProductInterfaceService
{
    public function __construct(protected ProductInterfaceRepository $productRepo) {}

    public function getNameSetProduct(): array
    {

        $womenSetProduct = $this->productRepo->getSetProductBuyGender(GenderConstant::FEMALE);
        $menSetProduct = $this->productRepo->getSetProductBuyGender(GenderConstant::MALE);

        $resultWomen = MapperSetProductUtil::getNameSetProduct($womenSetProduct);
        $resultMen = MapperSetProductUtil::getNameSetProduct($menSetProduct);

        return [
            'male_set_product_name'   => $resultMen,
            'female_set_product_name' => $resultWomen,
        ];
    }

    public function getNameDetailAlbumProduct(): array
    {
        $albumProduct = $this->productRepo->getNameDetailAlbumProduct();

        $groupAlbumByNameSetProduct = MapperAlbumUtil::mapperDetailAlbum($albumProduct);

        return $groupAlbumByNameSetProduct;
    }

    public function getHotProduct(): array
    {
        $hotProduct =  $this->productRepo->getHotProduct();

        $resultHotProduct = MapperProductUtil::mapperHotProduct($hotProduct);

        return $resultHotProduct;
    }
}
