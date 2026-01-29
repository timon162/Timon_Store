<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface CategoryInterfaceRepository
{
    public function getCategoryBuyGender(int $gender): Collection;

    public function getSetProductBuyGender(int $gender): Collection;
}
