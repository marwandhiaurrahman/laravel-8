<?php

namespace Modules\Rzfkomputer\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'label',
        'phone',
    ];

    protected static function newFactory()
    {
        return \Modules\Rzfkomputer\Database\factories\ContactFactory::new();
    }
}
