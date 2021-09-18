<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Product;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
        'price',
        'attribute',
    ];

    protected static function newFactory()
    {
        return \Modules\Order\Database\factories\OrderDetailFactory::new();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


}
