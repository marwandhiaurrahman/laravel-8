<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\CategoryProductFactory::new();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category', 'category_id', 'product_id');
    }
}
