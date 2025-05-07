<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai_kelas_2Model extends Model
{
    use HasFactory;
    protected $table=['table_nilai_kelas_2'];
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
