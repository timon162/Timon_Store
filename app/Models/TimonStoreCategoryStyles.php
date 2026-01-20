<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreCategories;
use App\Models\TimonStoreProducts;

class TimonStoreCategoryStyles extends Model
{
    protected $fillable = [
        'category_id',
        'category_style_name',
    ];

    public function category()
    {
        return $this->belongsTo(TimonStoreCategories::class, 'category_id');
    }

    public function product()
    {
        return $this->hasMany(TimonStoreProducts::class, 'category_style_id');
    }
}
