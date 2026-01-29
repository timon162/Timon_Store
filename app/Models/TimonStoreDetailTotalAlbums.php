<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimonStoreDetailTotalAlbums extends Model
{
    protected $fillable = [
        'album_product_id',
        'total_album_id',
    ];

    public function albumProduct()
    {
        return $this->belongsTo(TimonStoreAlbumProducts::class, 'album_product_id');
    }

    public function totalAlbum()
    {
        return $this->belongsTo(TimonStoreTotalAlbums::class, 'total_album_id');
    }
}
