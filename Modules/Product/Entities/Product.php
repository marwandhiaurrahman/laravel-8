<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        'status',
    ];

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new();
    }
}
