<?php

namespace Modules\Lingkungan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datalingkungan extends Model
{
    protected $table = "datalingkungans";
    protected $primaryKey = "id";
    protected $fillable = ['id','jenis','dok','tanggal_dibuat','berkas','keterangan'];
}
