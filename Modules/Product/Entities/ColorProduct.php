<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ColorProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'product_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ColorProductFactory::new();
    }
    public function procuct()
    {
        return $this->belongsTo(Product::class);
    }
}
