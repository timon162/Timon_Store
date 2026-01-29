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

    public static function mapperSetProduct(Collection $setProduct)
    {
        $groupSetProductByAlbumName = $setProduct->groupBy(fn($value) => $value->albumProduct->album_product_name);

        $result = $groupSetProductByAlbumName->map(fn($value) => $value->map(fn($item) => [
            'product_name' => $item->setProduct->set_product_name,
            'product_status' => $item->setProduct->set_product_status,
            'product_price' => format_price($item->setProduct->set_product_price),
            'product_quantity' => $item->setProduct->set_product_quantity,
            'product_image' => $item->setProduct->set_product_image,
        ]))->toArray();
        return $result;
    }
}
