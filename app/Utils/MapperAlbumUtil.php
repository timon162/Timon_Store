<?php

namespace App\Utils;

use Illuminate\Support\Collection;

class MapperAlbumUtil
{
    public static function mapperDetailAlbum(Collection $album): array
    {
        $groupAlbumById = $album->groupBy(fn($value) => $value->albumProduct->album_product_name);

        $albumResult = $groupAlbumById->map(
            fn($value) => $value->map(
                fn($item) => [
                    'id_set_product' => $item->setProduct->id,
                    'name_set_product' => $item->setProduct->set_product_name
                ]
            )->toArray()
        )->toArray();


        return $albumResult;
    }
}
