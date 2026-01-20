<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreAlbumProducts;
use App\Models\TimonStoreSetProducts;

class TimonStoreDetailAlbumProducts extends Model
{
    protected $fillable = [
        'album_product_id',
        'set_product_id',
    ];

    public function albumProduct()
    {
        return $this->belongsTo(TimonStoreAlbumProducts::class, 'album_product_id');
    }

    public function setProduct()
    {
        return $this->belongsTo(TimonStoreSetProducts::class, 'set_product_id');
    }
}
