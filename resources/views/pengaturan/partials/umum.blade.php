<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Nama Sekolah</label>
        <input type="text" name="nama_sekolah" value="">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" value="">
    </div>

    <div class="form-group">
        <label>No. Telepon</label>
        <input type="text" name="telepon" value="">
    </div>

    <div class="form-group">
        <label>Logo Sekolah</label>
        <input type="file" name="logo">
    </div>

    <button type="submit">Simpan</button>
</form>
