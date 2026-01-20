<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreDetailSetProducts;
use App\Models\TimonStoreSuppliers;
use App\Models\TimonStoreCategories;


class TimonStoreProducts extends Model
{
    protected $fillable = [
        'product_name',
        'product_code',
        'supplier_id',
        'category_style_id',
        'product_status',
        'product_price',
        'product_description',
        'product_image',
        'product_quantity',
    ];

    public function supplier()
    {
        return $this->belongsTo(TimonStoreSuppliers::class, 'supplier_id');
    }

    public function categoryStyle()
    {
        return $this->belongsTo(TimonStoreCategoryStyles::class, 'category_style_id');
    }

    public function detailSetProduct()
    {
        return $this->hasMany(TimonStoreDetailSetProducts::class, 'product_id');
    }
}
