<?php

namespace App\Utils;

use Illuminate\Support\Collection;

class MapperSetProductUtil
{
    public static function getAllSetProduct(Collection $setproduct): array
    {

        $result = $setproduct->map(
            fn($value) => [
                'set_product_name' => $value->set_product_name,
                'set_product_image' => $value->set_product_image,
                'set_product_price' => format_price($value->set_product_price),
                'set_product_quantity' => $value->set_product_quantity,
                'set_product_status' => $value->set_product_status,
                'set_product_gender' => $value->set_product_gender,
            ]
        )->toArray();

        return $result;
    }

    public static function getNameSetProduct(Collection $setproduct): array
    {

        $result = $setproduct->map(
            fn($value) => [
                'set_product_name' => $value->set_product_name,
            ]
        )->toArray();

        return $result;
    }
}
