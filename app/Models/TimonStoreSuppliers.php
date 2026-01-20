<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TimonStoreProducts;

class TimonStoreSuppliers extends Model
{
    protected $fillable = [
        'supplier_name',
        'supplier_image',
        'supplier_description'
    ];

    public function product()
    {
        return $this->hasMany(TimonStoreProducts::class, 'supllier_id');
    }
}
