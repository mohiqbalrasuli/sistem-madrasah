<?php

namespace App\Http\Controllers;

use App\Models\FanModel;
use App\Models\JadwalPelajaranModel;
use App\Models\KelasModel;
use App\Models\User;
use Illuminate\Http\Request;

class jadwalPelajaranController extends Controller
{
    public function index()
    {
        $kelas = Request()->input('kelas');

        $query = JadwalPelajaranModel::with(['guru', 'kelas','fan']);

        if (!empty($kelas)) {
            $query->whereHas('kelas', function ($q) use ($kelas) {
                $q->where('id', $kelas); // id dari tabel kelas
            });
        }else{
            $data=collect();
        }

        $data = $query->get();

        return view('jadwal.jadwal', compact('data', 'kelas'));
    }

    public function create()
    {
        $data=[
            'fan'=>FanModel::all(),
            'kelas'=>KelasModel::all(),
            'guru'=>User::all()
        ];

        return view('jadwal.tambahjadwal',$data);
    }

    public function store(Request $request)
    {
        $data=[
           'hari'=>$request->hari,
           'jam'=>$request->jam,
           'fan_id'=>$request->fan_id,
           'kelas_id'=>$request->kelas_id,
           'guru_id'=>$request->guru_id
        ];

        JadwalPelajaranModel::create($data);
        return redirect('/jadwal-pelajaran')->with('data berhasil disimpan!!');
    }

    public function edit($id)
    {
        $data=[
            'jadwal'=>JadwalPelajaranModel::findOrFail($id),
            'fan'=>FanModel::all(),
            'kelas'=>KelasModel::all(),
            'guru'=>User::all()
        ];

        return view('jadwal.editjadwal',$data);
    }


    public function update(Request $request,$id)
    {
        $id_data=JadwalPelajaranModel::findOrFail($id);

        $data=[
            'hari'=>$request->hari,
            'jam'=>$request->jam,
            'fan_id'=>$request->fan_id,
            'kelas_id'=>$request->kelas_id,
            'guru_id'=>$request->guru_id
         ];

         $id_data->update($data);
         return redirect('/jadwal-pelajaran')->with('data berhasil di edit');
    }

    public function delete(string $id)
    {
        JadwalPelajaranModel::where('id', $id)->delete();
        return redirect('/jadwal-pelajaran')->with('success', 'Data berhasil dihapus!');
    }
}
