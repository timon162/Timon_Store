<?php

namespace App\Results;

class NameSetProductResult
{
    public array $data;

    public function __construct(array $womenSetProduct, array $MenSetProduct)
    {
        $this->data = [
            'women_set_product' => $womenSetProduct,
            'men_set_product' => $MenSetProduct
        ];
    }
}
