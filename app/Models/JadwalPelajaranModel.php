<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPelajaranModel extends Model
{
    use HasFactory;
    protected $table = 'table_jadwal';
    protected $guarded =[];

    public function fan()
    {
        return $this->belongsTo(FanModel::class,'fan_id');
    }

    public function kelas()
    {
        return $this->belongsTo(KelasModel::class,'kelas_id');
    }

    public function guru()
    {
        return $this->belongsTo(User::class,'guru_id');
    }
}
