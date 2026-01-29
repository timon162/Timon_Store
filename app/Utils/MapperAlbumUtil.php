<?php

namespace App\Utils;

use Illuminate\Support\Collection;

class MapperAlbumUtil
{
    public static function mapperDetailAlbum(Collection $album): array
    {
        $groupAlbumById = $album->groupBy(fn($value) => $value->totalAlbum->total_album_name);

        $albumResult = $groupAlbumById->map(
            fn($value) => $value->map(
                fn($item) => [
                    'album_id' => $item->albumProduct->id,
                    'album_name' => $item->albumProduct->album_product_name
                ]
            )->toArray()
        )->toArray();

        return $albumResult;
    }
}
