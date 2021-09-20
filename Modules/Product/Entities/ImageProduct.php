<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'product_id'
    ];

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ImageProductFactory::new();
    }

    public function procuct()
    {
        return $this->belongsTo(Product::class);
    }
}
