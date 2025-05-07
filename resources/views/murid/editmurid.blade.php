@extends('layout.template_admin')

@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/form.css') }}">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Murid</h3>
                </div>
                <div class="card-body">
                    <form action="/data-murid/edit/{{ $murid->id }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>No. Induk</label>
                            <input type="text" value="{{ $murid->n1_induk }}" name="no_induk" class="form-control @error('ni_induk') is-invalid @enderror" placeholder="Masukkan No. Induk">
                            @error('ni_induk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Murid</label>
                            <input type="text" value="{{ $murid->nama_murid }}" name="nama_murid" class="form-control @error('nama_murid') is-invalid @enderror" placeholder="Masukkan Nama murid">
                            @error('nama_murid')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Pilih Kelas</label>
                            <select name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->id }}" {{ $fan->kelas_id == $item->id ? 'selected' : '' }}>{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" value="{{ $murid->tempat_lahir }}" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Masukkan Tempat Lahir">
                            @error('tempat_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" value="{{ $murid->tanggal_lahir }}" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="laki-laki" {{ $murid->gender == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ $murid->gender == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>

                            @error('gender')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" value="{{ $murid->alamat }}" name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3" placeholder="Masukkan Alamat"></input>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" value="{{ $murid->nama_ayah }}" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Masukkan Nama Ayah">
                            @error('nama_ayah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Pekerjaan Ayah</label>
                            <input type="text" value="{{ $murid->pekerjaan_ayah }}" name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" placeholder="Masukkan Pekerjaan Ayah">
                            @error('pekerjaan_ayah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" value="{{ $murid->nama_ibu }}" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Masukkan Nama Ibu">
                            @error('nama_ibu')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Ibu</label>
                            <input type="text" value="{{ $murid->pekerjaan_ibu }}" name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" placeholder="Masukkan Pekerjaan Ibu">
                            @error('pekerjaan_ibu')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/data-murid" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection