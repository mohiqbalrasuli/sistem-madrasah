@extends('layout.template_admin')

@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/form.css') }}">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Jadwal</h3>
                </div>
                <div class="card-body">
                    <form action="/jadwal-pelajaran/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <select name="hari" class="form-control @error('jam') is-invalid @enderror">
                                <option value="">--Pilih Hari--</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="ahad">Ahad</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <select name="jam" class="form-control @error('jam') is-invalid @enderror">
                                <option value="">--Pilih Jam--</option>
                                <option value="14:00-15:00 WIB"> 14:00-15:00 WIB </option>
                                <option value="15:30-16:30 WIB"> 15:30-16:30 WIB</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Pilih Fan</label>
                            <select name="fan_id" class="form-control @error('kelas_id') is-invalid @enderror">
                                <option value="">-- Pilih Fan --</option>
                                @foreach ($fan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_Fan }}</option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Pilih Kelas</label>
                            <select name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Pilih Guru</label>
                            <select name="guru_id" class="form-control @error('guru_id') is-invalid @enderror">
                                <option value="">-- Pilih Guru --</option>
                                @foreach ($guru as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('guru_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/jadwal-pelajaran" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection