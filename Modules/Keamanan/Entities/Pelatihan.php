<?php

namespace Modules\Keamanan\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelatihan extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected static function scopeFilter($query, array $filters)
    {
        $query ->when ($filters['search'] ?? false, function ($query,$search){
          return $query->where('sub_kriteria','like','%'. $search . '%')
          ->orWhere('divisi','like','%'. $search . '%');
     });
    }
     public function user()
    {
         return $this->belongsTo(User::class) ;
    }
    public function pelatihan()
    {
        return $this->belongsTo(User::class);
    }
}
