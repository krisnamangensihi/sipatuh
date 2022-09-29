<?php

namespace Modules\Lingkungan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point6doc extends Model
{
    use HasFactory;

    protected $guarded = ['create_at'];

    protected static function newFactory()
    {
        return \Modules\Lingkungan\Database\factories\Point6docFactory::new();
    }
}
