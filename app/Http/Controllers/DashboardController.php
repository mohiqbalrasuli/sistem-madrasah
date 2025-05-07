<?php

namespace App\Http\Controllers;

use App\Models\AlumniModel;
use App\Models\FanModel;
use App\Models\GuruModel;
use App\Models\KelasModel;
use App\Models\MuridModel;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahguru=User::where('role','guru')->count();
        $jumlahfan=FanModel::count();
        $jumlahkelas=KelasModel::count();
        $jumlahmurid=MuridModel::count();
        $jumlahmuridlk=MuridModel::where('gender','laki-laki')->count();
        $jumlahmuridpr=MuridModel::where('gender','perempuan')->count();
        $jumlahalumni=AlumniModel::count();
        $jumlahalumnilk=AlumniModel::where('gender','laki-laki')->count();
        $jumlahalumnipr=AlumniModel::where('gender','perempuan')->count();

        $shifirA = MuridModel::whereHas('kelas', function($query) {
            $query->where('nama_kelas', 'Shifir A');
        })->count();

        $shifirB = MuridModel::whereHas('kelas', function($query) {
            $query->where('nama_kelas', 'Shifir B');
        })->count();

        $kelas1 = MuridModel::whereHas('kelas', function($query) {
            $query->where('nama_kelas', 'Kelas 1');
        })->count();

        $kelas2 = MuridModel::whereHas('kelas', function($query) {
            $query->where('nama_kelas', 'Kelas 2');
        })->count();

        $kelas3 = MuridModel::whereHas('kelas', function($query) {
            $query->where('nama_kelas', 'Kelas 3');
        })->count();

        $kelas4 = MuridModel::whereHas('kelas', function($query) {
            $query->where('nama_kelas', 'Kelas 4');
        })->count();

        return view('dashboard',compact('jumlahguru',
                                    'jumlahfan',
                                    'jumlahkelas',
                                    'jumlahmurid',
                                    'jumlahmuridlk',
                                    'jumlahmuridpr',
                                    'jumlahalumni',
                                    'jumlahalumnilk',
                                    'jumlahalumnipr',
                                    'shifirA',
                                    'shifirB',
                                    'kelas1',
                                    'kelas2',
                                    'kelas3',
                                    'kelas4'));
        }

}

