<?php

namespace Modules\Lingkungan\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class P5c extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Lingkungan\Database\factories\P5cFactory::new();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
