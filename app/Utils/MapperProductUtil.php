<?php

namespace App\Utils;

use Illuminate\Support\Collection;

class MapperProductUtil
{
    public static function mapperHotProduct(Collection $hotProduct)
    {
        $result = $hotProduct->map(fn($value) => [
            'product_name' => $value->product_name,
            'product_status' => $value->product_status,
            'product_price' => format_price($value->product_price),
            'product_quantity' => $value->product_quantity,
            'product_image' => $value->product_image,
        ])->toArray();

        return $result;
    }
}
