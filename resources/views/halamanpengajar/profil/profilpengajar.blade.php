@extends('halamanpengajar.layout.tamplate_pengajar')
@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/halaman pengajar/profile.css') }}">
<div class="profile-container">
    <div class="profile-header">
        <img src="{{ asset('vendor/assets/download.jpeg') }}" alt="Profile Picture" class="profile-image">
        <h1 class="profile-name">{{ $user->name }}</h1>
        <p class="profile-role">Pengajar MDT Al-Barokah</p>
    </div>

    <div class="profile-details">
        <div class="detail-group">
            <div class="detail-label">Username</div>
            <div class="detail-value">{{ $user->username }}</div>
        </div>

        <div class="detail-group">
            <div class="detail-label">Email</div>
            <div class="detail-value">{{ $user->email }}</div>
        </div>

        <div class="detail-group">
            <div class="detail-label">Jenis Kelamin</div>
            <div class="detail-value">{{ $user->gender }}</div>
        </div>


        <div class="detail-group">
            <div class="detail-label">Tempat, Tanggal Lahir</div>
            <div class="detail-value">{{ $user->tempat_lahir }}, {{ $user->tanggal_lahir }}</div>
        </div>

        <div class="detail-group">
            <div class="detail-label">Nomor Telepon</div>
            <div class="detail-value">{{ $user->no_telepon }}</div>
        </div>

        <div class="detail-group">
            <div class="detail-label">Alamat</div>
            <div class="detail-value">{{ $user->alamat }}</div>
        </div>

        <div class="detail-group">
            <div class="detail-label">Mata Pelajaran yang Diampu</div>
            <div class="detail-value">
                @foreach ($jadwalguru as $key=> $jadwal )
                - {{ $jadwal->nama_Fan }} ({{ $jadwal->kelas->nama_kelas }})<br>
                @endforeach
            </div>
        </div>
    </div>

    <div class="profile-actions">
        <a href="/profil/edit/{{ $user->id }}" class="edit-button">Edit Profil</a>
    </div>
</div>

@endsection

