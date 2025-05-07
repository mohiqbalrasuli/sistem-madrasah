@extends('layout.template_admin')

@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/form.css') }}">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Fan</h3>
                </div>
                <div class="card-body">
                    <form action="/data-fan/store" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Nama Fan</label>
                            <input type="text" name="nama_fan" class="form-control @error('nama_guru') is-invalid @enderror" placeholder="Masukkan Nama Fan">
                            @error('nama_fan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Kitab</label>
                            <input type="text" name="nama_kitab" class="form-control @error('nama_kitab') is-invalid @enderror" placeholder="Masukkan Nama Kitab">
                            @error('nama_kitab')
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
                        <a href="/data-fan" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection