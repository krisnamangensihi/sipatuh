<?php

namespace Modules\Lingkungan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point6 extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Lingkungan\Database\factories\Point6Factory::new();
    }
}
