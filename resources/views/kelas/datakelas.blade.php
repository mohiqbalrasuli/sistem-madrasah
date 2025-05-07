@extends('layout.template_admin')

@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/style.css') }}">
<div class="table-container">
    <div class="table-header">
        <a href="/data-kelas/tambah-kelas" class="add-btn">Tambah Data</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>kelas</th>
                <th>Wali Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $key => $value)
            <tr>
                <td><?= $key+1?></td>
                <td>{{ $value->nama_kelas}}</td>
                <td>{{ $value->guru->name }}</td>
                <td>
                    <a href="/data-kelas/edit/{{ $value->id }}" style="padding: 5px 10px; background: #ffc107; color: #000; text-decoration: none; border-radius: 3px; font-size: 12px; margin-right: 5px;">Edit</a>
                    <a href="/data-kelas/delete/{{ $value->id }}" style="padding: 5px 10px; background: #dc3545; color: #fff; text-decoration: none; border-radius: 3px; font-size: 12px;" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection