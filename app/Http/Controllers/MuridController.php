<?php

namespace App\Http\Controllers;


use App\Models\KelasModel;
use App\Models\MuridModel;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index ()
    {
        $kelas = Request()->input('kelas');

        $query = MuridModel::with(['kelas']);

        if (!empty($kelas)) {
            $query->whereHas('kelas', function ($q) use ($kelas) {
                $q->where('id', $kelas); // id dari tabel kelas
            });
        }else{
            $data=collect();
        }

        $data = $query->get();

        return view('murid.datamurid', compact('data', 'kelas'));
    }

    public function create()
    {
        $data=[
            'kelas'=>KelasModel::all()
        ];

        return view('murid.tambahmurid',$data);
    }

    public function store(Request $request)
    {
        $data=[
            'ni_induk'=>$request->ni_induk,
            'nama_murid'=>$request->nama_murid,
            'kelas_id'=>$request->kelas_id,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'gender'=>$request->gender,
            'alamat'=>$request->alamat,
            'no_telepon'=>$request->no_telepon,
            'nama_ayah'=>$request->nama_ayah,
            'pekerjaan_ayah'=>$request->pekerjaan_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'pekerjaan_ibu'=>$request->pekerjaan_ibu
        ];

        MuridModel::create($data);
        return redirect('/data-murid')->with('data berhasil di simpan!!');
    }

    public function edit($id)
    {
        $data=[
            'murid'=>MuridModel::findOrFail($id),
            'kelas'=>KelasModel::all()
        ];

        return view('murid.editmurid',$data);
    }

    public function update(Request $request, $id)
    {
        $id_murid=MuridModel::findOrFail($id);

        $data=[
            'no_induk'=>$request->no_induk,
            'nama_murid'=>$request->nama_murid,
            'kelas_id'=>$request->kelas_id,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'no_telepon'=>$request->no_telepon,
            'nama_ayah'=>$request->nama_ayah,
            'pekerjaan_ayah'=>$request->pekerjaan_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'pekerjaan_ibu'=>$request->pekerjaan_ibu
        ];

        $id_murid->update($data);
        return redirect('/data-murid')->with('data berhasil disimpan!!');
    }

    public function delete(string $id)
    {
        MuridModel::where('id',$id)->delete();
        return redirect('/data-murid')->with('data berhasil di hapus!!');
    }
}
