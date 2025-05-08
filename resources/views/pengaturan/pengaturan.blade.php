@extends('layout.template_admin')

@section('content')
<style>
    .tab-buttons {
        display: flex;
        border-bottom: 2px solid #198754;
        margin-bottom: 1rem;
    }

    .tab-button {
        padding: 10px 20px;
        cursor: pointer;
        background: #e8f5e9;
        border: none;
        border-right: 1px solid #198754;
        color: #14532d;
        font-weight: bold;
        transition: background 0.2s;
    }

    .tab-button.active {
        background: #198754;
        color: white;
    }

    .tab-content {
        display: none;
        padding: 20px;
        border: 1px solid #198754;
        border-radius: 5px;
        background: white;
    }

    .tab-content.active {
        display: block;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    label {
        font-weight: 600;
        display: block;
        margin-bottom: 4px;
    }

    input[type="text"], input[type="file"], select {
        padding: 8px;
        width: 100%;
        max-width: 400px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        padding: 10px 20px;
        background: #198754;
        color: white;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
    }

    button:hover {
        background: #14532d;
    }
</style>

<div>
    <h2>Pengaturan Sistem</h2>
    <div class="tab-buttons">
        <button class="tab-button active" onclick="showTab('tab-umum')">Umum</button>
        <button class="tab-button" onclick="showTab('tab-akses')">Akun & Akses</button>
        <button class="tab-button" onclick="showTab('tab-akademik')">Akademik</button>
        <button class="tab-button" onclick="showTab('tab-nilai')">Nilai & Rapor</button>
        <button class="tab-button" onclick="showTab('tab-jadwal')">Jadwal</button>
    </div>

    <div id="tab-umum" class="tab-content active">
        @include('pengaturan.partials.umum')
    </div>
    <div id="tab-akses" class="tab-content">
        @include('pengaturan.partials.akses')
    </div>
    <div id="tab-akademik" class="tab-content">
        @include('pengaturan.partials.akademik')
    </div>
    {{-- <div id="tab-nilai" class="tab-content">
        @include('pengaturan.partials.nilai')
    </div> --}}
    {{-- <div id="tab-jadwal" class="tab-content">
        @include('pengaturan.partials.jadwal')
    </div> --}}
</div>

<script>
    function showTab(id) {
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
        document.querySelector(`[onclick="showTab('${id}')"]`).classList.add('active');
        document.getElementById(id).classList.add('active');
    }
</script>
@endsection
