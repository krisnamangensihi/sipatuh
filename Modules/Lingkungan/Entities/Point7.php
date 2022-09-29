<?php

namespace Modules\Lingkungan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point7 extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Lingkungan\Database\factories\Point7Factory::new();
    }
}
