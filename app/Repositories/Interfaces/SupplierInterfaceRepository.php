<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface SupplierInterfaceRepository
{
    public function getAllSupplierByCategoryStyleId(int $id): collection;
}
