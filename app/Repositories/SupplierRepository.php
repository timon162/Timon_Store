<?php

namespace App\Repositories;

use App\Repositories\Interfaces\SupplierInterfaceRepository;
use App\Models\TimonStoreProducts;
use Illuminate\Support\Collection;

class SupplierRepository implements SupplierInterfaceRepository
{
    public function getAllSupplierByCategoryStyleId(int $id): collection
    {
        $supplier = TimonStoreProducts::with('supplier')->where('category_style_id', $id)->get();
        return $supplier;
    }
}
