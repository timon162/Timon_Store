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

    public static function mapperCategoryStyleProduct(Collection $product)
    {
        $resultcategoryStyle = $product->groupBy(fn($value) => $value->categoryStyle->category_style_name);

        $result = $resultcategoryStyle->map(fn($value) => $value->map(fn($item) => [
            'product_name' => $item->product_name,
            'product_status' => $item->product_status,
            'product_price' => format_price($item->product_price),
            'product_quantity' => $item->product_quantity,
            'product_image' => $item->product_image,
        ]))->toArray();

        return $result;
    }
}
