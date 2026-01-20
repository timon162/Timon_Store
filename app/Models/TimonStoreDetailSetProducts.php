<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreSetProducts;
use App\Models\TimonStoreProducts;

class TimonStoreDetailSetProducts extends Model
{
    protected $fillable = [
        'set_product_id',
        'product_id',
    ];

    public function setProduct()
    {
        return $this->belongsTo(TimonStoreSetProducts::class, 'set_product_id');
    }

    public function product()
    {
        return $this->belongsTo(TimonStoreProducts::class, 'product_id');
    }
}
