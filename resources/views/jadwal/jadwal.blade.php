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
            <a href="/jadwal-pelajaran/tambah-jadwal-pelajaran" class="add-btn">Tambah Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>jam</th>
                    <th>Nama Fan</th>
                    <th>Kelas</th>
                    <th>Pengajar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key=>$value )
                <tr>
                    <td><?=$key+1 ?></td>
                    <td>{{ $value->jam }}</td>
                    <td>{{ $value->fan->nama_Fan }}</td>
                    <td>{{ $value->kelas->nama_kelas }}</td>
                    <td>{{ $value->guru->name }}</td>
                    <td>
                        <a href="/jadwal-pelajaran/edit/{{ $value->id }}" style="padding: 5px 10px; background: #ffc107; color: #000; text-decoration: none; border-radius: 3px; font-size: 12px; margin-right: 5px;">Edit</a>
                        <a href="/jadwal-pelajaran/delete/{{ $value->id }}" style="padding: 5px 10px; background: #dc3545; color: #fff; text-decoration: none; border-radius: 3px; font-size: 12px;" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection