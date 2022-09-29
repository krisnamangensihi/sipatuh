<?php

namespace Modules\Lingkungan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point2doc extends Model
{
    use HasFactory;

    protected $guarded = ['created_at'];

    protected static function newFactory()
    {
        return \Modules\Lingkungan\Database\factories\Point2docFactory::new();
    }
}
