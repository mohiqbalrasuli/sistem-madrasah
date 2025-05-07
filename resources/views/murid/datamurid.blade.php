@extends('layout.template_admin')

@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/style.css') }}">
    <div class="filter-container">
        <form action="/data-murid" method="get">
            <select name="kelas" class="filter-dropdown" style="padding: 8px; border-radius: 5px; border: 1px solid #ddd;" onchange="this.form.submit()">
                <option value="">Semua</option>
                <option value="1" {{ request('kelas') == 1 ? 'selected' : '' }}>Kelas Shifir A</option>
                <option value="2" {{ request('kelas') == 2 ? 'selected' : '' }}>Kelas Shifir B</option>
                <option value="3" {{ request('kelas') == 3 ?  'selected' : '' }}>Kelas 1</option>
                <option value="4" {{ request('kelas') == 4 ? 'selected' : '' }}>Kelas 2</option>
                <option value="5" {{ request('kelas') == 5 ? 'selected' : '' }}>Kelas 3</option>
                <option value="6" {{ request('kelas') == 6 ? 'selected' : '' }}>Kelas 4</option>
            </select>
        </form>
    </div>
    <div class="table-container">
        <div class="table-header">
            <a href="/data-murid/tambah-murid" class="add-btn">Tambah Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Induk</th>
                    <th>Nama Murid</th>
                    <th>Kelas</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Nama ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan ibu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key=>$value )
                <tr>
                    <td><?=$key+1?></td>
                    <td>{{ $value->ni_induk}}</td>
                    <td>{{ $value->nama_murid }}</td>
                    <td>{{ $value->kelas->nama_kelas }}</td>
                    <td>{{ $value->tempat_lahir }}</td>
                    <td>{{ $value->tanggal_lahir }}</td>
                    <td>{{ $value->gender }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->no_telepon }}</td>
                    <td>{{ $value->nama_ayah }}</td>
                    <td>{{ $value->pekerjaan_ayah }}</td>
                    <td>{{ $value->nama_ibu }}</td>
                    <td>{{ $value->pekerjaan_ibu }}</td>
                    <td>
                        <a href="/data-murid/edit/{{ $value->id }}" style="padding: 5px 10px; background: #ffc107; color: #000; text-decoration: none; border-radius: 3px; font-size: 12px; margin-right: 5px;">Edit</a>
                        <a href="/data-murid/delete/{{ $value->id }}" style="padding: 5px 10px; background: #dc3545; color: #fff; text-decoration: none; border-radius: 3px; font-size: 12px;" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection