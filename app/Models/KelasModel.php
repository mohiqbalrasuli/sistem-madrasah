<?php

namespace App\Models;

use App\Http\Controllers\GuruController;
use App\Http\Controllers\jadwalPelajaranController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    use HasFactory;
    protected $table = 'table_kelas';
    protected $guarded = [];

    public function kelas()
    {
        return $this->hasMany(FanModel::class,'kelas_id');
        return $this->hasMany(MuridModel::class,'kelas_id');
        return $this->hasMany(JadwalPelajaranModel::class,'kelas_id');
    }

    public function guru()
    {
        return $this->belongsTo(User::class,'guru_id');
    }
}
