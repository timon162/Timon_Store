<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;
use App\Models\TimonStoreProducts;

interface ProductInterfaceRepository
{
    public function getSetProductBuyGender(int $gender): Collection;

    public function getNameDetailAlbumProduct(): Collection;

    public function getHotProduct(): Collection;

    public function getLimitSetProductByAlbumId(int $id): Collection;

    public function getAlbum(): Collection;

    public function findProductById(int $id): TimonStoreProducts;

    public function getRelatedProducts(int $categoryStyleId, int $excludeId): Collection;

    public function getOptionProductById(int $id): Collection;
}
