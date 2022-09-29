<?php

namespace Modules\Keamanan\Entities;

use App\Models\Pengajuan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kepemimpinandoc extends Model
{
    use HasFactory;

    protected $guarded = ['created_at'];
    
    protected  function kepemimpinan()
    {
        return $this->belongsTo(User::class) ;
        
    }
    public function pengajuan()
    {
         return $this->belongsTo(Pengajuan::class) ;
    }
    
}
