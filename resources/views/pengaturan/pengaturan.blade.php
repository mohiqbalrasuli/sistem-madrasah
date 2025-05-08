@extends('layout.template_admin')

@section('content')
<style>
    .tab-buttons {
        display: flex;
        border-bottom: 2px solid #198754;
        margin-bottom: 1rem;
        background: #f8f9fa;
        border-radius: 8px 8px 0 0;
        justify-content: space-between; /* Membuat tab full kanan kiri */
    }

    .tab-button {
        margin-top: 15px;
        padding: 12px 24px;
        cursor: pointer;
        background: #e8f5e9;
        border: none;
        border-right: 1px solid #198754;
        color: #14532d;
        font-weight: 600;
        transition: all 0.3s ease;
        flex: 1; /* Membuat setiap tab memiliki lebar yang sama */
        text-align: center; /* Memastikan teks berada di tengah */
    }

    .tab-button:last-child {
        border-right: none;
    }

    .tab-button:hover {
        background: #c8e6c9;
    }

    .tab-button.active {
        background: #198754;
        color: white;
    }

    .tab-content {
        display: none;
        padding: 2rem;
        border: 1px solid #198754;
        border-radius: 0 0 8px 8px;
        background: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .tab-content.active {
        display: block;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    label {
        font-weight: 600;
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input[type="text"],
    input[type="file"],
    select {
        padding: 10px 12px;
        width: 100%;
        max-width: 500px;
        border: 1px solid #ddd;
        border-radius: 6px;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="file"]:focus,
    select:focus {
        border-color: #198754;
        outline: none;
        box-shadow: 0 0 0 2px rgba(25, 135, 84, 0.1);
    }

    button[type="submit"] {
        padding: 12px 24px;
        background: #198754;
        color: white;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    button[type="submit"]:hover {
        background: #14532d;
    }
    .btn-logout{
        padding: 12px 24px;
        background: #198754;
        color: white;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-logout:hover{
        background: #14532d
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Pengaturan Sistem</h2>

            <div class="tab-buttons">
                <button class="tab-button active" onclick="showTab('tab-umum')">Umum</button>
                <button class="tab-button" onclick="showTab('tab-akses')">Akun & Akses</button>
                <button class="tab-button" onclick="showTab('tab-akademik')">Akademik</button>
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
        </div>
    </div>
</div>
<a href="/logout/{id}" class="btn-logout">Logout</a>

<script>
    function showTab(tabId) {
        // Sembunyikan semua tab
        document.querySelectorAll('.tab-content').forEach(function(tab) {
            tab.classList.remove('active');
        });

        // Tampilkan tab yang dipilih
        document.getElementById(tabId).classList.add('active');

        // Nonaktifkan semua tombol
        document.querySelectorAll('.tab-button').forEach(function(button) {
            button.classList.remove('active');
        });

        // Aktifkan tombol yang diklik
        document.querySelector(`button[onclick="showTab('${tabId}')"]`).classList.add('active');
    }
</script>
@endsection
