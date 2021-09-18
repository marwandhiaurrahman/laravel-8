<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Customer\Entities\Customer;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'total_price',
        'status',
        'customer_id',
        'snap_token',
    ];

    protected static function newFactory()
    {
        return \Modules\Order\Database\factories\OrderFactory::new();
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
