<?php

namespace App\Utils;

use Illuminate\Support\Collection;

class MapperSupplierUtil
{
    public static function getSupplier(Collection $data): array
    {
        $supplier = $data->map(fn($value) => [
            'supplier_id' => $value->supplier->id,
            'supplier_name' => $value->supplier->supplier_name,
        ]);

        $result = $supplier->groupBy('supplier_name')->toArray();

        return $result;
    }

    public static function defaultSupplier(): array
    {
        return $supplier = [
            'Timon Store' => '',
        ];
    }
}
