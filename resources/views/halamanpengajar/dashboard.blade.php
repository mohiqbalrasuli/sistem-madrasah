@extends('halamanpengajar.layout.tamplate_pengajar')
@section('content')

<!-- main content -->
<div class="welcome-section">
    <h1>Selamat Datang di Sistem Pengajar MDT Al-Barokah</h1>
</div>

<div class="dashboard-cards">
    <div class="card">
        <img src="{{ asset('vendor/assets/class-svgrepo-com.svg') }}" alt="" width="400px" />
    </div>
</div>
<div class="subjects-table">
    <h2>Mata Pelajaran yang Diampuh</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwalguru as $key=> $jadwal )
            <tr>
                <td><?=$key+1?></td>
                <td>{{ $jadwal->nama_Fan }}</td>
                <td>{{ $jadwal->kelas->nama_kelas }}</td>
            </tr>
            @endforeach
    </table>
</div>
@endsection