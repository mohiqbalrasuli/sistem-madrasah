@extends('layout.template_admin')
@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/style.css') }}">
        <div class="table-container">
            <div class="table-header">
                <a href="/data-guru/tambah-guru" class="add-btn">Tambah Data</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $key => $value)
                    <tr>
                        <td><?= $key+1?></td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->tempat_lahir }}</td>
                        <td>{{ $value->tanggal_lahir }}</td>
                        <td>{{ $value->gender }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->no_telepon }}</td>
                        <td>
                            <a href="/data-guru/edit/{{ $value->id }}" style="padding: 5px 10px; background: #ffc107; color: #000; text-decoration: none; border-radius: 3px; font-size: 12px; margin-right: 5px;">Edit</a>
                            <a href="/data-guru/delete/{{ $value->id }}" style="padding: 5px 10px; background: #dc3545; color: #fff; text-decoration: none; border-radius: 3px; font-size: 12px;" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection