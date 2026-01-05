<!DOCTYPE html>
<html>
<head>
    <title>Formulir pendaftaran santri</title>
    <style>
        body { font-family: sans-serif; margin: 40px; background-color: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 600px; margin: auto; }
        h2 { color: #2d5a27; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #2d5a27; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; }
        button:hover { background-color: #1e3d1a; }
        .back-link { display: block; text-align: center; margin-top: 20px; color: #666; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Pendaftaran Santri Baru</h2>
        <p style="text-align: center;">Pesantren At-Taqwil.</p>
        <form method="POST" action="/submit-registration">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah:</label>
                <input type="text" id="asal_sekolah" name="asal_sekolah" required>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="tel" id="nomor_telepon" name="nomor_telepon" required>
            <hr>
            <h3>Data Orang Tua/Wali</h3>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah:</label>
                <input type="text" id="nama_ayah" name="nama_ayah" required>
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu:</label>
                <input type="text" id="nama_ibu" name="nama_ibu" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
            </div>
            <button type="button" onclik="alert('terimaksih ! Data pendaftaran telah terkirim.')">kirim pendaftaran</button>

            <div style="margin-top: 20px;">
        <button type="submit" style="width: 100%; background: #2d5a27; color: white; padding: 15px; border: none; border-radius: 5px; font-weight: bold;">
            KIRIM PENDAFTARAN
        </button>
    </div>

</form> ```
        <a href="/" class="back-link">Kembali ke Beranda</a>

</div>
</body>
</html>