<div id="tab-akademik" class="tab-content">
    <form id="form-akademik">
        <div class="form-group">
            <label for="tahun_ajaran">Tahun Ajaran Aktif</label>
            <input type="text" id="tahun_ajaran" name="tahun_ajaran" value="2024/2025">
        </div>

        <div class="form-group">
            <label for="semester">Semester</label>
            <select id="semester" name="semester">
                <option value="1">Semester 1 (Ganjil)</option>
                <option value="2">Semester 2 (Genap)</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sistem_pelajaran">Sistem Pelajaran</label>
            <select id="sistem_pelajaran" name="sistem_pelajaran">
                <option value="per_kelas">Pelajaran berdasarkan Kelas</option>
                <option value="umum">Pelajaran Umum (semua kelas sama)</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kuota_kelas">Kuota Maksimal Murid per Kelas</label>
            <input type="number" id="kuota_kelas" name="kuota_kelas" min="1" value="30">
        </div>

        <button type="submit">Simpan</button>
    </form>
</div>

<script>
    document.getElementById('form-akademik').addEventListener('submit', function(e) {
        e.preventDefault();

        const data = {
            tahun_ajaran: document.getElementById('tahun_ajaran').value,
            semester: document.getElementById('semester').value,
            sistem_pelajaran: document.getElementById('sistem_pelajaran').value,
            kuota_kelas: document.getElementById('kuota_kelas').value
        };

        // Simulasi penyimpanan
        console.log('Data Akademik Disimpan:', data);

        alert("Pengaturan akademik berhasil disimpan!");
    });
</script>
