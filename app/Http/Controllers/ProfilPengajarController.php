<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FanModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilPengajarController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $jadwalguru=FanModel::with(['kelas'])
        ->where('guru_id',Auth::User()->id)
        ->get();

        return view('halamanpengajar.profil.profilpengajar',compact('user','jadwalguru'));
    }

    public function edit($id)
    {
        $data=[
            'guru'=>User::findOrFail($id)
        ];

        return view('halamanpengajar.profil.editprofil',$data);
    }

    public function update(Request $request, $id)
    {
        $id_guru = User::find($id);

        $data=[
            'name' => $request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            // 'password'=>Hash::make($request->password),
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            // 'role'=>$request->role,
        ];

        $id_guru->update($data);
        return redirect('/profil/{id}')->with('data berhasil di simpan!!');
    }
}
