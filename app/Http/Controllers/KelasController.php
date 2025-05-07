<?php

namespace App\Http\Controllers;

use App\Models\FanModel;
use App\Models\GuruModel;
use App\Models\KelasModel;
use App\Models\MuridModel;
use App\Models\User;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas=KelasModel::with('guru')->get();

        return view('kelas.datakelas',compact('kelas'));
    }

    public function create()
    {
        $data=[
            'guru'=>User::all()
        ];

        return view('kelas.tambahkelas',$data);
    }

    public function store(Request $request)
    {
        $data=[
            'nama_kelas'=>$request->nama_kelas,
            'guru_id'=>$request->guru_id
        ];

        KelasModel::create($data);
        return redirect('/data-kelas')->with('data berhasil di simpan!!');
    }

    public function edit($id)
    {
        $data=[
            'kelas'=>KelasModel::findOrFail($id),
            'guru'=>User::all()
        ];
        return view('kelas.editkelas',$data);
    }

    public function update(Request $request,$id)
    {
        $id_kelas=KelasModel::findOrFail($id);
        $data=[
            'nama_kelas'=>$request->nama_kelas,
            'guru_id'=>$request->guru_id
        ];

        $id_kelas->update($data);
        return redirect('/data-kelas')->with('data berhasil diedit!!');
    }

    public function delete(string $id)
    {
        $data=[
            'fan'=>FanModel::where('kelas_id',$id)->first(),
            'murid'=>MuridModel::where('kelas_id',$id)->first()
        ];

        if($data['fan'] != NULL || $data['murid'] != NULL){
            return back()->with('error', 'Data kelas tidak dapat dihapus karena masih digunakan!');
        }

        KelasModel::findOrFail($id)->delete();
        return redirect('/data-kelas')->with('success', 'Data kelas berhasil dihapus!');
    }
}
