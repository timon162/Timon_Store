<?php

namespace App\Utils;

use App\Models\TimonStoreOptionProducts;
use Illuminate\Support\Collection;
use App\Models\TimonStoreProducts;

class MapperProductUtil
{
    public static function mapperHotProduct(Collection $hotProduct)
    {
        $result = $hotProduct->map(fn($value) => [
            'id' => $value->id,
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
            'id' => $item->id,
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

    public static function mapperRelatesProduct(Collection $relatesProduct)
    {

        $result = $relatesProduct->map(fn($value) => [
            'id' => $value->id,
            'product_name' => $value->product_name,
            'product_status' => $value->product_status,
            'product_price' => format_price($value->product_price),
            'product_image' => $value->product_image,
        ])->toArray();
        return $result;
    }

    public static function mapperDetailProduct(TimonStoreProducts $detailProduct)
    {
        $result = [
            'product_name' => $detailProduct->product_name,
            'product_code' => $detailProduct->product_code,
            'product_status' => $detailProduct->product_status,
            'product_price' => format_price($detailProduct->product_price),
            'product_description' => $detailProduct->product_description,
            'product_image' => $detailProduct->product_image,
            'product_quantity' => $detailProduct->product_quantity,
            'supplier_name' => $detailProduct->supplier->supplier_name,
        ];
        return $result;
    }

    public static function mapperTypeOptionProduct(Collection $optionProduct)
    {
        $result = $optionProduct->groupBy('option_type')->map(
            fn($value) => $value->map(fn($item) => [
                'option_id' => $item->id,
                'option_name' => $item->option_name,
                'option_price' => $item->option_price,
                'image_decription_option' => $item->ImageDecriptionOption->pluck('description_option_image')
            ])->toArray()
        )->toArray();

        return $result;
    }
}
