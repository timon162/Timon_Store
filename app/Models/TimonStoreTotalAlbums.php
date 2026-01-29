<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimonStoreTotalAlbums extends Model
{
    protected $fillable = [
        'total_album_name'
    ];

    public function detailTotalAlbum()
    {
        return $this->hasMany(TimonStoreDetailTotalAlbums::class, 'total_album_id');
    }
}
