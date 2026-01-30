<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ProductInterfaceRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\TimonStoreDetailAlbumProducts;
use App\Models\TimonStoreDetailTotalAlbums;
use App\Models\TimonStoreProducts;

class ProductRepository implements ProductInterfaceRepository
{
    public function getSetProductBuyGender(int $gender): Collection
    {
        return  DB::table('timon_store_set_products')->where('set_product_gender', $gender)->get();
    }

    public function getNameDetailAlbumProduct(): Collection
    {
        $detailAlbum = TimonStoreDetailAlbumProducts::with(
            'albumProduct:id,album_product_name',
            'setProduct:id,set_product_name',
        )->get();
        return $detailAlbum;
    }

    public function getHotProduct(): Collection
    {
        return DB::table('timon_store_products')->where('is_hot', 1)->get();
    }

    public function getLimitProductByCategoryStyleId(int $id): Collection
    {
        $product = TimonStoreProducts::with('categoryStyle')->where('category_style_id', $id)->take(6)->get();
        return $product;
    }

    public function getLimitSetProductByAlbumId(int $id): Collection
    {
        $setProduct = TimonStoreDetailAlbumProducts::with(
            'albumProduct:id,album_product_name',
            'setProduct',
        )->where('album_product_id', $id)->get();
        return $setProduct;
    }

    public function getAlbum(): Collection
    {
        $album = TimonStoreDetailTotalAlbums::with(
            'albumProduct:id,album_product_name',
            'totalAlbum:id,total_album_name'
        )->get();
        return $album;
    }

    public function findProductById(int $id): TimonStoreProducts
    {
        return TimonStoreProducts::with('supplier')->findOrFail($id);
    }

    public function getRelatedProducts(int $categoryStyleId, int $excludeId): Collection
    {
        return TimonStoreProducts::select([
            'id',
            'product_name',
            'product_status',
            'product_price',
            'product_image'
        ])->where('category_style_id', $categoryStyleId)->where('id', '!=', $excludeId)->get();
    }
}
