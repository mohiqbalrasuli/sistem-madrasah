<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuridModel extends Model
{
    use HasFactory;
    protected $table ='table_murid';
    protected $guarded =[];

    public function kelas()
    {
        return $this->belongsTo(KelasModel::class,'kelas_id');
    }

    public function murid()
    {
        return $this->hasMany(nilai_kelas_shifir_aModel::class,'murid_id');
        return $this->hasMany(nilai_kelas_shifir_bModel::class,'murid_id');
        return $this->hasMany(nilai_kelas_1Model::class,'murid_id');
        return $this->hasMany(nilai_kelas_2Model::class,'murid_id');
        return $this->hasMany(nilai_kelas_3Model::class,'murid_id');
        return $this->hasMany(nilai_kelas_4Model::class,'murid_id');
    }
}
