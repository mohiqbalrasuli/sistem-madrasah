<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\FanController;
use App\Http\Controllers\jadwalmengajarController;
use App\Http\Controllers\jadwalPelajaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\Nilai1Controller;
use App\Http\Controllers\Nilai2Controller;
use App\Http\Controllers\Nilai3Controller;
use App\Http\Controllers\Nilai4Controller;
use App\Http\Controllers\NilaishifirAController;
use App\Http\Controllers\NilaishifirBController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\ProfilPengajarController;
use App\Http\Controllers\walikelasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function(){
    return redirect('/login');
});

// login user
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'login_proses']);

Route::get('/logout/{id}', [AuthController::class, 'logout']);

Route::get('/wali-kelas',[walikelasController::class,'index']);

// middleware untuk pengajar
Route::middleware(['auth','role:guru'])->group(function(){
    // halaman pengajar
    Route::get('/pengajar/{id}',[Controller::class,'index']);
    // profile pengajar
    Route::get('/profil/{id}',[ProfilPengajarController::class,'index']);
    Route::get('/profil/edit/{id}',[ProfilPengajarController::class,'edit']);
    Route::post('/profil/update/{id}',[ProfilPengajarController::class,'update']);
    // jadwal mengajar
    Route::get('/jadwal-mengajar/{id}',[jadwalmengajarController::class,'index']);
});


// middleware untuk admin
Route::middleware(['auth','role:admin'])->group(function(){
        // dashboard
    Route::get('/dashboard/{id}',[DashboardController::class,'index']);
    // data guru
    Route::get('/data-guru',[GuruController::class,'index']);
    Route::get('/data-guru/tambah-guru',[GuruController::class,'create']);
    Route::post('/data-guru/store',[GuruController::class,'store']);
    Route::get('/data-guru/edit/{id}',[GuruController::class,'edit']);
    Route::post('/data-guru/update/{id}',[GuruController::class,'update']);
    Route::get('/data-guru/delete/{id}',[GuruController::class,'delete']);
    // data murid
    Route::get('/data-murid',[MuridController::class,'index']);
    Route::get('/data-murid/tambah-murid',[MuridController::class,'create']);
    Route::post('/data-murid/store',[MuridController::class,'store']);
    Route::get('/data-murid/edit/{id}',[MuridController::class,'edit']);
    Route::post('/data-murid/update/{id}',[MuridController::class,'update']);
    Route::get('/data-murid/delete/{id}',[MuridController::class,'delete']);
    // data kelas
    Route::get('/data-kelas',[KelasController::class,'index']);
    Route::get('/data-kelas/tambah-kelas',[KelasController::class,'create']);
    Route::post('/data-kelas/store',[KelasController::class,'store']);
    Route::get('/data-kelas/edit/{id}',[KelasController::class,'edit']);
    Route::post('/data-kelas/update/{id}',[KelasController::class,'update']);
    Route::get('/data-kelas/delete/{id}',[KelasController::class,'delete']);
    // data nilai
    // nilai kelas shifir A
    Route::get('/nilai-kelas-shifir-A',[NilaishifirAController::class,'index']);
    // nilai kelas shifir B
    Route::get('/nilai-kelas-shifir-B',[NilaishifirBController::class,'index']);
    // nilai kelas 1
    Route::get('/nilai-kelas-1',[Nilai1Controller::class,'index']);
    // nilai kelas 2
    Route::get('/nilai-kelas-2',[Nilai2Controller::class,'index']);
    // nilai kelas 3
    Route::get('/nilai-kelas-3',[Nilai3Controller::class,'index']);
    // nilai kelas 4
    Route::get('/nilai-kelas-4',[Nilai4Controller::class,'index']);
    // data fan
    Route::get('/data-fan',[FanController::class,'index']);
    Route::get('/data-fan/tambah-fan',[FanController::class,'create']);
    Route::post('/data-fan/store',[FanController::class,'store']);
    Route::get('/data-fan/edit/{id}',[FanController::class,'edit']);
    Route::post('/data-fan/update/{id}',[FanController::class,'update']);
    Route::get('/data-fan/delete/{id}',[FanController::class,'delete']);
    // jadwal pelajaran
    Route::get('/jadwal-pelajaran',[jadwalPelajaranController::class,'index']);
    Route::get('/jadwal-pelajaran/tambah-jadwal-pelajaran',[jadwalPelajaranController::class,'create']);
    Route::post('/jadwal-pelajaran/store',[jadwalPelajaranController::class,'store']);
    Route::get('/jadwal-pelajaran/edit/{id}',[jadwalPelajaranController::class,'edit']);
    Route::post('/jadwal-pelajaran/update/{id}',[jadwalPelajaranController::class,'update']);
    Route::get('/jadwal-pelajaran/delete/{id}',[jadwalPelajaranController::class,'delete']);
    // data alumni
    Route::get('/data-alumni',[AlumniController::class,'index']);
    // pengaturan
    Route::get('/setting',[PengaturanController::class,'index']);

    // halaman pengajar
    Route::get('/pengajar/{id}',[Controller::class,'index']);
    // profile pengajar
    Route::get('/profil/{id}',[ProfilPengajarController::class,'index']);
    Route::get('/profil/edit/{id}',[ProfilPengajarController::class,'edit']);
    Route::post('/profil/update/{id}',[ProfilPengajarController::class,'update']);
    // jadwal mengajar
    Route::get('/jadwal-mengajar/{id}',[jadwalmengajarController::class,'index']);
});
