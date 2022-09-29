<?php

namespace Modules\Lingkungan\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class P1b extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Lingkungan\Database\factories\P1bFactory::new();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
