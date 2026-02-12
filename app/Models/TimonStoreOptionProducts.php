<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreProducts;
use App\Models\TimonStoreImageDescriptionOptions;

class TimonStoreOptionProducts extends Model
{
    protected $fillable = [
        'option_type',
        'option_name',
        'option_price',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(TimonStoreProducts::class, 'product_id');
    }

    public function ImageDecriptionOption()
    {
        return $this->hasMany(TimonStoreImageDescriptionOptions::class, 'option_product_id');
    }
}
