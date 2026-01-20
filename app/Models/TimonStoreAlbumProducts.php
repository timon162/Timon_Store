<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreDetailAlbumProducts;

class TimonStoreAlbumProducts extends Model
{
    protected $fillable = [
        'album_product_name'
    ];

    public function detailAlbumProduct()
    {
        return $this->hasMany(TimonStoreDetailAlbumProducts::class, 'album_product_id');
    }
}
