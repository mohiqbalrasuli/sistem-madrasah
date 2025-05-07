@extends('layout.template_admin')
@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/style.css') }}">
        <div class="table-container">
            <div class="table-header">
                <button class="add-btn">Tambah Data</button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th rowspan="4">No</th>
                        <th rowspan="4">No. Induk</th>
                        <th rowspan="4">Nama Murid</th>
                        <th rowspan="4">Kelas</th>
                        <th colspan="2">Fan Pokok</th>
                        <th colspan="2">Non Fan Pokok</th>
                        <th colspan="3">praktek</th>
                        <th rowspan="3">Jumlah Nilai Fan Pokok</th>
                        <th rowspan="3">Rata2 Nilai Fan Pokok</th>
                        <th rowspan="3">Jumlah Nilai Non Fan Pokok</th>
                        <th rowspan="3">Rata2 Nilai Non Fan Pokok</th>
                        <th rowspan="3">Jumlah Nilai Seluruh</th>
                        <th rowspan="3">Rata2 Nilai Seluruh</th>
                        <th rowspan="3">Rangking</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>1</th>
                        <th>2</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                    </tr>
                    <tr>
                        <th>Membaca</th>
                        <th>Menulis</th>
                        <th>Pego</th>
                        <th>Bahasa Arab</th>
                        <th>Q. Qur'an</th>
                        <th>P. Sholat</th>
                        <th>Doa - Doa</th>
                    </tr>
                    <tr>
                        <th colspan="7">Nilai Imda</th>
                        <th colspan="7">Nilai Imda Murni</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="18" class="text-center">Belum ada data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection