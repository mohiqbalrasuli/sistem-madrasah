<?php

namespace App\Http\Controllers;

use App\Models\FanModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index()
    {
        $guru =[
            'guru'=> User::where('role','guru')->get()
        ];
        return view('guru.dataguru',$guru);
    }

    public function create()
    {
        $guru =[
            'guru'=>User::all()
        ];
        return view('guru.tambahguru',$guru);
    }

    public function store(Request $request)
    {
        $data=[
            'name' => $request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'role'=>$request->role,
        ];

        User::create($data);
        return redirect('/data-guru')->with('data berhasil di simpan!!s');
    }

    public function edit($id)
    {
        $data =[
            'guru'=>User::findOrFail($id)
        ];
        return view('guru.editguru',$data);
    }

    public function update(Request $request, $id)
    {
        $id_guru = User::find($id);

        $data=[
            'name' => $request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'role'=>$request->role,
        ];

        $id_guru->update($data);
        return redirect('/data-guru')->with('data berhasil di simpan!!');
    }

    public function delete(string $id)
    {
        $guru = FanModel::where('guru_id', $id)->first();

        if ($guru != null) {
            return back()->with('error', 'Masih ada fan yang diampu!');
        }

        User::where('id', $id)->delete();
        return redirect('/data-guru')->with('success', 'Data berhasil dihapus!');
    }
}
