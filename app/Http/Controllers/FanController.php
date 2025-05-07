<?php

namespace App\Http\Controllers;

use App\Models\FanModel;
use App\Models\KelasModel;
use App\Models\User;
use Illuminate\Http\Request;

class FanController extends Controller
{
    public function index()
    {
        $kelas = Request()->input('kelas');

        $query = FanModel::with(['guru', 'kelas']);

        if (!empty($kelas)) {
            $query->whereHas('kelas', function ($q) use ($kelas) {
                $q->where('id', $kelas); // id dari tabel kelas
            });
        }else{
            $data=collect();
        }

        $data = $query->get();

        return view('fan.datafan', compact('data', 'kelas'));
    }

    public function create()
    {
        $data =[
            'kelas'=>KelasModel::all(),
            'guru'=>User::all()
        ];
        return view('fan.tambahfan',$data);
    }

    public function Store(Request $request)
    {
        $data =[
            'nama_fan' => $request->nama_fan,
            'nama_kitab' => $request->nama_kitab,
            'kelas_id'=>$request->kelas_id,
            'guru_id'=>$request->guru_id
        ];

        FanModel::create($data);
        return redirect('/data-fan')->with('data berhasil di simpan!!');
    }

    public function edit($id)
    {
        $data=[
            'fan'=>FanModel::findOrFail($id),
            'kelas'=>KelasModel::all(),
            'guru'=>User::all()
        ];

        return view('fan.editfan',$data);
    }

    public function update (Request $request, $id)
    {
        $id_fan= FanModel::findOrFail($id);

        $data=[
            'nama_fan' => $request->nama_fan,
            'nama_kitab' => $request->nama_kitab,
            'kelas_id'=>$request->kelas_id,
            'guru_id'=>$request->guru_id
        ];

        $id_fan -> update($data);
        return redirect('/data-fan')->with('data berhasil di edit!!');
    }

    public function delete(string $id)
    {
        FanModel::where('id', $id)->delete();
        return redirect('/data-fan')->with('success', 'Data berhasil dihapus!');
    }
}
