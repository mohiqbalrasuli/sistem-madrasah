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
                        <th colspan="3">Fan Pokok</th>
                        <th colspan="3">Non Fan Pokok</th>
                        <th colspan="4">praktek</th>
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
                        <th>3</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                    </tr>
                    <tr>
                        <th>Fasholatan</th>
                        <th>Fiqih</th>
                        <th>Tauhid</th>
                        <th>Bahasa Arab</th>
                        <th>Imla'</th>
                        <th>Tarekh</th>
                        <th>Q. Qur'an</th>
                        <th>Q. Kitab</th>
                        <th>Muhafadhah</th>
                        <th>P. Sholat</th>
                    </tr>
                    <tr>
                        <th colspan="10">Nilai Imda</th>
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