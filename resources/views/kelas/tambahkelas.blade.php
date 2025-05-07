@extends('layout.template_admin')

@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/form.css') }}">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Kelas</h3>
                </div>
                <div class="card-body">
                    <form action="/data-kelas/store" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror" placeholder="Masukkan Kelas">
                            @error('Nama Kelas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pilih Wali Kelas</label>
                            <select name="guru_id" class="form-control @error('guru_id') is-invalid @enderror">
                                <option value="">-- Pilih Wali Kelas --</option>
                                @foreach ($guru as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('guru_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection