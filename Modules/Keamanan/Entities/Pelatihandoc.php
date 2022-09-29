<?php

namespace Modules\Keamanan\Entities;

use App\Models\User;
use App\Models\Pengajuan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelatihandoc extends Model
{
    use HasFactory;

    protected $guarded = ['created_at'];
    
    protected  function pelatihan()
    {
        return $this->belongsTo(User::class) ;
        
    }
    public function pengajuan()
    {
         return $this->belongsTo(Pengajuan::class) ;
    }
}
