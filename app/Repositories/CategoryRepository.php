<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CategoryInterfaceRepository;
use Illuminate\Support\Collection;
use App\Models\TimonStoreCategoryStyles;
use Illuminate\Support\Facades\DB;

class CategoryRepository implements CategoryInterfaceRepository
{
    public function getCategoryBuyGender(int $gender): Collection
    {
        $category = TimonStoreCategoryStyles::with('category')->where('gender', $gender)->get();

        return $category;
    }

    public function getSetProductBuyGender(int $gender): Collection
    {
        return  DB::table('timon_store_set_products')->where('set_product_gender', $gender)->get();
    }
}
