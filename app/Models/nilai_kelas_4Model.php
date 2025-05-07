<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai_kelas_4Model extends Model
{
    use HasFactory;
    protected $table=['table_nilai_kelas_4'];
    protected $guarded=[];

    public function murid()
    {
        return $this->belongsTo(MuridModel::class,'murid_id');
    }

    public function kelas()
    {
        return $this->belongsTo(KelasModel::class,'kelas_id');
    }
}
