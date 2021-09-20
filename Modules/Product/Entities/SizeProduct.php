<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SizeProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'label',
        'product_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\SizeProductFactory::new();
    }

    public function procuct()
    {
        return $this->belongsTo(Product::class);
    }
}
