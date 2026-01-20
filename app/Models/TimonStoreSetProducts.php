<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreDetailSetProducts;
use App\Models\TimonStoreDetailAlbumProducts;

class TimonStoreSetProducts extends Model
{
    protected $fillable = [
        'set_product_name',
        'set_product_image',
        'set_product_price',
        'set_product_quantity',
        'set_product_status',
        'set_product_gender',
    ];

    public function detailSetProduct()
    {
        return $this->hasMany(TimonStoreDetailSetProducts::class, 'set_product_id');
    }

    public function detailAlbumProduct()
    {
        return $this->hasMany(TimonStoreDetailAlbumProducts::class, 'set_product_id');
    }
}
