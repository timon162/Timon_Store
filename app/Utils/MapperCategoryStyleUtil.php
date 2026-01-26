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

        $result = $grouCategoryName->map(
            fn($value) => $value->map(
                fn($item) => [
                    'category_style_id' => $item->id,
                    'name_style' => $item->category_style_name
                ]
            )
        )->toArray();

        return $result;
    }
}
