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
        
    }
}
