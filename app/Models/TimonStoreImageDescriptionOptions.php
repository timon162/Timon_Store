<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreProducts;
use App\Models\TimonStoreOptionProducts;

class TimonStoreImageDescriptionOptions extends Model
{
    protected $fillable = [
        'description_option_image',
        'option_product_id',
    ];

    public function optionProduct()
    {
        return $this->belongsTo(TimonStoreOptionProducts::class, 'option_product_id');
    }
}
