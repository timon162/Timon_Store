<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ProductInterfaceRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\TimonStoreDetailAlbumProducts;

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
}
