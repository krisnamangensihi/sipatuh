<?php

namespace App\Models;

use Modules\K3\Entities\Audit;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Keamanan\Entities\Kepemimpinan;
use Modules\Keamanan\Entities\Kerawanan;
use Modules\Keamanan\Entities\Lapor;
use Modules\Keamanan\Entities\Manager;
use Modules\Keamanan\Entities\Pelatihan;
use Modules\Keamanan\Entities\Pengamanan;
use Modules\Keamanan\Entities\Sosial;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nip',
        'unit',
        'alamat',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the role that owns the user.
     *
     */
   public function role()
    {
       return $this->belongsTo(Role::class);
    }
    public function kepemimpinan()
    {
       return $this->belongsTo(Kepemimpinan::class);
    }
    public function sosial()
    {
       return $this->belongsTo(Sosial::class);
    }
    public function pengamanan()
    {
       return $this->belongsTo(Pengamanan::class);
    }
    public function kerawanan()
    {
       return $this->belongsTo(Kerawanan::class);
    }
    public function pelatihan()
    {
       return $this->belongsTo(Pelatihan::class);
    }
    public function manager()
    {
       return $this->belongsTo(Manager::class);
    }
    public function lapor()
    {
       return $this->belongsTo(Lapor::class);
    }
}
