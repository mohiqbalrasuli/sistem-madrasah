<?php

namespace App\Http\Controllers;

use App\Models\JadwalPelajaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jadwalmengajarController extends Controller
{
    public function index()
    {
        $jadwalmengajar=JadwalPelajaranModel::with(['fan','kelas'])
                    ->where('guru_id',Auth::User()->id)
                    ->get();

        return view('halamanpengajar.jadwalmengajar',compact('jadwalmengajar'));
    }
}
