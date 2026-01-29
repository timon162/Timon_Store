<?php

namespace App\Services\Interfaces;

interface ProductInterfaceService
{
    public function getNameSetProduct(): array;

    public function getNameDetailAlbumProduct(): array;

    public function getHotProduct(): array;

    public function getLimitProductByCategoryStyleId(int $id): array;

    public function getLimitSetProductByAlbumId(int $id): array;
}
