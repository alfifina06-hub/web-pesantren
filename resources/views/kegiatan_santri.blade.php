
<section id="kegiatan" style="padding: 60px 0; background: #fdfdfd; min-height: 80vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 style="color: #2d5a27; font-weight: bold; text-align: center; margin-bottom: 40px;">KEGIATAN SANTRI</h2>

                <div style="margin-bottom: 15px;">
                    <button onclick="bukaTutup('jadwal')" style="width: 100%; background: #2d5a27; color: white; padding: 15px; border: none; border-radius: 5px; text-align: left; font-weight: bold; display: flex; justify-content: space-between;">
                        <span><i class="fa fa-clock-o"></i> JADWAL KEGIATAN HARIAN</span>
                        <span id="ikon-jadwal">-</span>
                    </button>
                    <div id="jadwal" style="display: block; padding: 20px; border: 1px solid #2d5a27; background: white;">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead style="background: #2d5a27; color: white;">
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kegiatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>04.00 - 05.00</td><td>Sholat Subuh & Tadarus</td></tr>
                                    <tr><td>06.00 - 06.30</td><td>Sarapan</td></tr>
                                    <tr><td>07.00 - 12.00</td><td>sekolah kurikulum</td></tr>
                                    <tr><td>12.00 - 13.00</td><td>Sholat Dzuhur & Istirahat</td></tr>
                                    <tr><td>13.00 - 15.00</td><td>Pelajaran Agama</td></tr>
                                    <tr><td>15.00 - 16.00</td><td>Sholat Ashar & Istirahat</td></tr>
                                    <tr><td>16.00 - 18.00</td><td>Kegiatan Ekstrakurikuler</td></tr>
                                    <tr><td>18.00 - 19.30</td><td>Sholat Maghrib & Makan Malam</td></tr>
                                    <tr><td>19.30 - 20.30</td><td>Sholat Isya'& Bimbingan Belajar</td></tr>
                                    <tr><td>19.00 - 20.30</td><td>Belajar Mandiri / Kajian Agama</td></tr>
                                    <tr><td>20.30 - 21.30</td><td>Waktu Bebas & Persiapan Tidur</td></tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 50px;">
    <h3 class="text-center" style="color: #2d5a27; font-weight: bold; margin-bottom: 30px;">GALERI KEGIATAN SANTRI</h3>
    <hr style="width: 100px; border: 2px solid #2d5a27; margin: auto; margin-bottom: 40px;">
    
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="text-center">
                <div class="row">
    <div class="col-md-6">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">Santri putra sholat berjemaah</h4>
                <div class="col-md-6">
            </div>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/santri putra berjemaah.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="text-center">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">Santri putri sholat berjemaah</h4>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/berjemaah putri.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
        </div>
        </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="text-center">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">Kegiatan belajar mengajar putra</h4>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/sekolah putra.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
            </div>
        <div class="col-md-3 mb-3">
            <div class="text-center">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">Kegiatan belajar mengajar putri</h4>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/sekolah putri.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
            </div>
        <div class="col-md-3 mb-3">
            <div class="text-center">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">Tadarus putri</h4>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/santri putri mengaji.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="text-center">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">Tadarus putra</h4>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/santri putra ngaji.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="text-center">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">KBM kitab kuning</h4>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/ngaji santri putri.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="text-center">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">KBM kitab kuning</h4>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/kuning putra.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="text-center">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">Ekstrakulikuler seni lukis</h4>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/kaligrafi.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="text-center">
                <h4 style="color: #2d5a27; font-weight: bold; text-transform: uppercase;">Ekstrakulikuler pencak silat</h4>
            </div>
            <div class="thumbnail shadow-sm">
                <img src="{{ asset('images/pencak silat.jpg') }}" style="width: 50%; height: 250px; display: block; margin: auto; object-fit: cover; border-radius: 10px;">
            </div>
            </div>

    </div>
</div>


<script>
    function bukaTutup(id) {
        var x = document.getElementById(id);
        var ikon = document.getElementById('ikon-' + id);
        if (x.style.display === "none") {
            x.style.display = "block";
            ikon.innerHTML = "-";
        } else {
            x.style.display = "none";
            ikon.innerHTML = "+";
        }
    }
</script>