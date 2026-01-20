<?php

namespace App\Utils;

use Illuminate\Support\Collection;

class MapperCategoryStyleUtil
{
    public static function groupCategoryStyleByName(Collection $category): array
    {
        $grouCategoryName = $category->groupBy(
            fn($value) => $value->category->category_name
        );

        $resultCategoryStyle = $grouCategoryName->map(
            fn($value) => $value->map(
                fn($item) => [
                    'category_style_id' => $item->id,
                    'name_style' => $item->category_style_name
                ]
            )
        );

        $result = $resultCategoryStyle->map(
            fn($value) => [
                'style_category_id' => $value->map(fn($item) => $item['category_style_id'])->toArray(),
                'style_category' => $value->map(fn($item) => $item['name_style'])->toArray(),
            ]
        )->toArray();

        return $result;
    }
}
