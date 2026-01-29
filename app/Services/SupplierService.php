<?php

namespace App\Services;

use App\Repositories\Interfaces\SupplierInterfaceRepository;
use App\Services\Interfaces\SupplierInterfaceService;
use App\Utils\MapperSupplierUtil;
use Illuminate\Support\Collection;

class SupplierService implements SupplierInterfaceService
{
    public function __construct(protected SupplierInterfaceRepository $supplierRepo) {}

    public function getAllSupplierByCategoryStyleId(int $id)
    {
        $result = $this->supplierRepo->getAllSupplierByCategoryStyleId($id);

        $supplierResult = MapperSupplierUtil::getSupplier($result);

        return $supplierResult;
    }

    public function getDefaultSupplier(): array
    {

        $supplierResult = MapperSupplierUtil::defaultSupplier();

        return $supplierResult;
    }
}
