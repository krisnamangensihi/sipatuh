<?php

namespace Modules\Lingkungan\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Lingkungan\Database\factories\P1aFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class P1a extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return P1aFactory::new();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
