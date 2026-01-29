<?php

namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface SupplierInterfaceService
{
    public function getAllSupplierByCategoryStyleId(int $id);

    public function getDefaultSupplier(): array;
}
