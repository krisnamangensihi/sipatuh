<?php

namespace Modules\Lingkungan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point7doc extends Model
{
    use HasFactory;

    protected $guarded = ['create_at'];

    protected static function newFactory()
    {
        return \Modules\Lingkungan\Database\factories\Point7docFactory::new();
    }
}
