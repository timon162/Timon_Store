<?php

namespace App\Services\Interfaces;

use App\Results\CategoryResult;
use Illuminate\Support\Collection;

interface CategoryInterfaceService
{
    public function getCategoryBuyGender(int $gender): Collection;

    public function groupCategoryName(): array;
}
