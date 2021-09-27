<?php

namespace Modules\Rzfkomputer\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'facebook',
        'instagram',
        'youtube',
    ];

    protected static function newFactory()
    {
        return \Modules\Rzfkomputer\Database\factories\OfficeFactory::new();
    }
}
