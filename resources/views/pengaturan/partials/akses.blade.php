<div id="tab-akses" class="tab-content">
    <form id="form-akses">
        <div class="form-group">
            <label for="password_default">Reset Password Default (Guru & Murid)</label>
            <input type="text" id="password_default" name="password_default" value="123456">
        </div>

        <div class="form-group">
            <label for="login_akses">Login Diperbolehkan Untuk</label>
            <select id="login_akses" name="login_akses">
                <option value="semua">Semua (Admin, Guru, Murid)</option>
                <option value="admin">Hanya Admin</option>
                <option value="admin_guru">Admin & Guru</option>
            </select>
        </div>

        <div class="form-group">
            <label for="akses_guru">Akses Manajemen Data Oleh Guru</label>
            <select id="akses_guru" name="akses_guru">
                <option value="boleh">Diperbolehkan</option>
                <option value="tidak">Tidak Diperbolehkan</option>
            </select>
        </div>

        <button type="submit">Simpan</button>
    </form>
</div>

<script>
    document.getElementById('form-akses').addEventListener('submit', function(e) {
        e.preventDefault();

        const data = {
            password_default: document.getElementById('password_default').value,
            login_akses: document.getElementById('login_akses').value,
            akses_guru: document.getElementById('akses_guru').value
        };

        // Simulasi penyimpanan (di console saja)
        console.log('Data disimpan:', data);

        alert("Pengaturan akun & akses berhasil disimpan!");
    });
</script>
