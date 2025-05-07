@extends('layout.template_admin')

@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/style.css') }}">
    <div class="filter-container">
        <select class="filter-dropdown" style="padding: 8px; border-radius: 5px; border: 1px solid #ddd;">
            <option value="">Pilih tahun lulusan</option>
            <option value="1">2023/2024</option>
            <option value="1">2024/2025</option>
            <option value="1">2024/2025</option>
            <option value="2">2025/2026</option>
        </select>
    </div>
    <div class="table-container">
        <div class="table-header">
            <button class="add-btn">Tambah Data</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Alumni</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" class="text-center">Belum ada data</td>
                </tr>
            </tbody>
        </table>
</div>
@endsection