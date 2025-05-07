@extends('halamanpengajar.layout.tamplate_pengajar')

@section('content')
<div class="subjects-table">
    @if (Auth::User()->gender=='laki-laki')
    <h2>Jadwal Mengajar Ustadz {{ Auth::user()->name }}</h2>
    @else
    <h2>Jadwal Mengajar Ustadzah {{ Auth::user()->name }}</h2>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Mata Pelajaran</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwalmengajar as $key=> $value )
            <tr>
                <td><?=$key+1?></td>
                <td>{{ $value->hari }}</td>
                <td>{{ $value->jam }}</td>
                <td>{{ $value->fan->nama_Fan }}</td>
                <td>{{ $value->kelas->nama_kelas }}</td>
            </tr>
            @endforeach
    </table>
</div>
@endsection