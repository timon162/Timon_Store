<?php

namespace App\Services;

use App\Services\Interfaces\ProductInterfaceService;
use App\Repositories\Interfaces\ProductInterfaceRepository;
use App\Utils\MapperSetProductUtil;
use App\Utils\MapperAlbumUtil;
use App\Constants\GenderConstant;
use App\Utils\MapperProductUtil;
use Illuminate\Support\Collection;

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
        $albumProduct = $this->productRepo->getAlbum();

        $groupAlbumByNameSetProduct = MapperAlbumUtil::mapperDetailAlbum($albumProduct);

        return $groupAlbumByNameSetProduct;
    }

    public function getHotProduct(): array
    {
        $hotProduct =  $this->productRepo->getHotProduct();

        $resultHotProduct = MapperProductUtil::mapperHotProduct($hotProduct);

        return $resultHotProduct;
    }

    public function getLimitProductByCategoryStyleId(int $id): array
    {
        $product = $this->productRepo->getLimitProductByCategoryStyleId($id);

        $result = MapperProductUtil::mapperCategoryStyleProduct($product);

        return $result;
    }

    public function getLimitSetProductByAlbumId(int $id): array
    {
        $setProduct = $this->productRepo->getLimitSetProductByAlbumId($id);

        $result = MapperProductUtil::mapperSetProduct($setProduct);

        return $result;
    }
}
