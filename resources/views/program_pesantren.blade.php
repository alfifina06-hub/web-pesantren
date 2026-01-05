<style>
    .isi-program { display: none; padding: 20px; border: 1px solid #2d5a27; margin-top: 10px; background: #fff; }
    .tombol-menu { width: 100%; background: #2d5a27; color: white; padding: 15px; border: none; text-align: left; font-weight: bold; margin-top: 10px; cursor: pointer; }
</style>

<section id="program" class="sections" style="padding: 60px 0; background: #fdfdfd;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 style="color: #2d5a27; font-weight: bold; text-align: center; margin-bottom: 40px;">MENU PROGRAM PESANTREN</h2>

                <div style="margin-bottom: 15px;">
                    <button onclick="bukaTutup('unggulan')" style="width: 100%; background: #2d5a27; color: white; padding: 15px; border: none; border-radius: 5px; text-align: left; font-weight: bold; font-size: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span><i class="fa fa-star"></i> PROGRAM UNGGULAN</span>
                        <span id="ikon-unggulan" style="font-size: 20px;">+</span>
                    </button>
                    <div id="unggulan" style="display: none; padding: 20px; border: 1px solid #2d5a27; border-top: none; background: white; border-radius: 0 0 5px 5px;">
                        <ul style="line-height: 2; font-size: 15px;">
                            <li><i class="fa fa-check-circle" style="color: #2d5a27;"></i> Program Tahfidz Al-Qur'an 30 Juz</li>
                            <li><i class="fa fa-check-circle" style="color: #2d5a27;"></i> Program Bahasa Arab</li>
                            <li><i class="fa fa-check-circle" style="color: #2d5a27;"></i> Program Bahasa Inggris</li>
                            <li><i class="fa fa-check-circle" style="color: #2d5a27;"></i> Program Seni Islami</li>
                        </ul>
                    </div>
                </div>

                <div style="margin-bottom: 15px;">
                    <button onclick="bukaTutup('ekskul')" style="width: 100%; background: #2d5a27; color: white; padding: 15px; border: none; border-radius: 5px; text-align: left; font-weight: bold; font-size: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span><i class="fa fa-users"></i> PROGRAM EKSTRAKURIKULER</span>
                        <span id="ikon-ekskul" style="font-size: 20px;">+</span>
                    </button>
                    <div id="ekskul" style="display: none; padding: 20px; border: 1px solid #2d5a27; border-top: none; background: white; border-radius: 0 0 5px 5px;">
                        <p>Berikut adalah kegiatan ekstrakurikuler santri Pesantren At-Taqwil:</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul style="list-style: none; padding-left: 0;">
                                    <li><i class="fa fa-angle-right"></i> Pencak Silat</li>
                                    <li><i class="fa fa-angle-right"></i> Seni Karya</li>
                                    <li><i class="fa fa-angle-right"></i> Seni Suara / Qori'</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul style="list-style: none; padding-left: 0;">
                                    <li><i class="fa fa-angle-right"></i> Bimbel Bhs. Arab</li>
                                    <li><i class="fa fa-angle-right"></i> Bimbel Bhs. Inggris</li>
                                    <li><i class="fa fa-angle-right"></i> Albanjari / Hadrah</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 15px;">
                    <button onclick="bukaTutup('tahfidz')" style="width: 100%; background: #2d5a27; color: white; padding: 15px; border: none; border-radius: 5px; text-align: left; font-weight: bold; font-size: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span><i class="fa fa-book"></i> PROGRAM TAHFIDZ HUSUS</span>
                        <span id="ikon-tahfidz" style="font-size: 20px;">+</span>
                    </button>
                    <div id="tahfidz" style="display: none; padding: 20px; border: 1px solid #2d5a27; border-top: none; background: white; border-radius: 0 0 5px 5px;">
                        <h4 style="color: #2d5a27; font-weight: bold;">Rincian Tahfidz Husus</h4>
                        <table class="table table-bordered" style="margin-top: 15px;">
                            <tr style="background: #f9f9f9;">
                                <div class="row margin-top-20">
    <div class="col-md-12">
        <h3 style="color: #2d5a27; font-weight: bold;">Detail Program Tahfidz</h3>
        <table class="table table-bordered">
            <tr>
                <th>Durasi Program</th>
                <td>1-3 tahun, tergantung pada target hafalan santri</td>
            </tr>
            <tr>
                <th>Target Hafalan</th>
                <td>Mulai dari 1 juz hingga 30 juz</td>
            </tr>
            <tr>
                <th>Metode Pembelajaran</th>
                <td>Metode Talaqqi, Muraja'ah, dan Metode Visualisasi</td>
            </tr>
            <tr>
                <th>Fasilitas Pendukung</th>
                <td>Ruang belajar khusus, perpustakaan Al-Qur'an, dan bimbingan intensif</td>
            </tr>
        </table>
        <div class="col-md-5 col-sm-5">
            <img src="{{ asset('images/tadarus.jpg') }}" 
                 class="img-responsive img-thumbnail" 
                 style="width: 80%; height: auto;" 
                 alt="Gambar Tadarus">
        </div>
        <div class="col-md-12">
        <h3 style="color: #2d5a27; font-weight: bold;">Jadwal Harian Tahfidz</h3>
        <ul>
            <li>04:00 - 05:00: Tahajud dan Sholat Subuh</li>
            <li>05:00 - 06:00: Hafalan Al-Qur'an</li>
            <li>06:00 - 07:00: Sarapan dan Istirahat</li>
            <li>07:00 - 09:00: Pelajaran Umum</li>
            <li>09:00 - 10:00: Setoran</li>
            <li>12:00 - 13:00: Sholat Dzuhur dan Istirahat</li>
            <li>13:00 - 15:00: Muroja'ah Mandiri</li>
            <li>15:00 - 16:00: Sholat Ashar dan Waktu Bebas</li>
            <li>16:00 - 18:00: Hafalan Al-Qur'an</li>
            <li>18:00 - 19:00: Sholat Maghrib dan Makan Malam</li>
            <li>19:00 - 20:30: Kajian Agama dan Setoran hafalan malam(Tahsim)</li>
            <li>20:30 - 21:30: Waktu Bebas dan Persiapan Tidur</li>
        </ul>
        </div>
    </div>
</div>
               
    </div>
</div>            

                <div class="text-center" style="margin-top: 50px;">
                    <a href="/" class="btn btn-success" style="padding: 10px 30px; border-radius: 20px;">Kembali ke Beranda</a>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    function bukaTutup(id) {
        var elemen = document.getElementById(id);
        var ikon = document.getElementById('ikon-' + id);
        
        if (elemen.style.display === "none") {
            elemen.style.display = "block"; // Munculkan isinya
            ikon.innerHTML = "-"; // Ganti ikon jadi minus
        } else {
            elemen.style.display = "none"; // Sembunyikan isinya
            ikon.innerHTML = "+"; // Ganti ikon jadi plus
        }
    }
</script>