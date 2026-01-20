<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreCategoryStyles;


class TimonStoreCategories extends Model
{
    protected $fillable = [
        'category_name'
    ];

    public function categoryStyle()
    {
        return $this->hasMany(TimonStoreCategoryStyles::class, 'category_id');
    }
}
