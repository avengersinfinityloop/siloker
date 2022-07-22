<?php
// session_start();
// if (!isset($_SESSION['username'])){
//     header("location: loginp.php");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Profil Akun</title>
</head>
<script src="bar.js"></script>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="multimedia/image/loker.jpeg" alt="no gambar" width="30" height="30">SILOKER
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Dropdown -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="NavbarDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kursus</a>
                    <div class="dropdown-menu" aria-labelledby="NavbarDrop">
                        <a class="dropdown-item" href="kursus.php">Menu</a>
                        <a class="dropdown-item" href="cekTempat.php">Cek Tempat</a>
                        <a class="dropdown-item" href="pasangIklan.php">Pasang Iklan</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="NavbarDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Loker</a>
                    <div class="dropdown-menu" aria-labelledby="NavbarDrop">
                        <a class="dropdown-item" href="dashloker.php">Menu Utama</a>
                        <a class="dropdown-item" href="loker.php">Main Loker</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="NavbarDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Bootcamp</a>
                    <div class="dropdown-menu" aria-labelledby="NavbarDrop">
                        <a class="dropdown-item" href="uiUx.php">UI UX</a>
                        <a class="dropdown-item" href="indexBootcamp.php">Index Bootcamp</a>
                        <a class="dropdown-item" href="fullStackWebDevelopment.php">Full Stack Web Development</a>
                        <a class="dropdown-item" href="digitalMarketing.php">Digital Marketing</a>
                        <a class="dropdown-item" href="about.php">About</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="NavbarDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                    <div class="dropdown-menu" aria-labelledby="NavbarDrop">
                        <a class="dropdown-item" href="profil.php">Profil</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <center>
        <h1>Profil Diri</h1>
        <hr style="border: 0;
            height: 1px;
            background: #333;
            background-image: linear-gradient(to right, #ccc, #333, #ccc);">
        <img src="multimedia/image/loker.jpeg" alt="no gambar" style="width: 90px; height: 100px; border-radius:100px">
        <br><br>
    </center>
    <br>
    <!-- From Pengisian Profil Data Diri -->
    <form action="simpanProfil.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <!-- Data Diri -->
                <fieldset class="form-group border p-3">
                    <legend class="w-auto px-3">Data Diri</legend>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control nik" name="nik" id="nik" onchange="tes()" placeholder="NIK">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control nama" name="nama" id="nama" onchange="tes()" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control tanggal" name="tanggal-lahir" onchange="tes()" id="tanggal-lahir">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis-kelamin" id="jk" class="form-control kelamin" onchange="tes()">
                            <option value=""></option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control status" onchange="tes()">
                            <option value=""></option>
                            <option value="Lajang">Lajang</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Janda/Duda">Janda/Duda</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kebangsaan</label>
                        <select name="kebangsaan" id="kebangsaan" class="form-control kebangsaan" onchange="tes()">
                            <option value=""></option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Asing">Asing</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gaji Yang Diharapkan</label>
                        <input type="text" name="gaji-harapan" class="form-control gaji-harapan" onchange="tes()" id="gaji-harapan" placeholder="Rp.">
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <!-- Kontak -->
                <fieldset class="form-group border p-3">
                    <legend class="w-auto px-3">Kontak</legend>
                    <div class="form-group">
                        <label>Nomor Telepon (Opsional)</label>
                        <input type="text" class="form-control telepon" name="telepon" id="telepon" onchange="tes()" placeholder="(022)xxxxx">
                    </div>
                    <div class="form-group">
                        <label>Nomor ponsel</label>
                        <input type="text" name="hp" class="form-control ponsel" id="hp" placeholder="08123xxxxxx" onchange="tes()">
                    </div>
                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" name="email" class="form-control email" id="email" placeholder="andi@gmail.com" onchange="tes()">
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <select name="lokasi" id="lokasi-tinggal" class="form-control lokasi" onchange="tes()">
                            <option value=""></option>
                            <option value="bandung">Bandung</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="surabaya">Surabaya</option>
                            <option value="medan">Medan</option>
                            <option value="solo">Solo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control alamat" rows="3" placeholder="Alamat" onchange="tes()"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="text" name="kode-pos" class="form-control pos" id="pos" placeholder="40123" onchange="tes()">
                    </div>
                    <div class="form-group">
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Pendidikan -->
                <fieldset class="form-group border p-3">
                    <legend class="w-auto px-3">Pendidikan</legend>
                    <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <select name="pendidikan" id="pendidikan" onchange="tes()" class="form-control tanggal">
                            <option></option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sederajat">SMA/SMK</option>
                            <option value="diploma">D1/Diploma</option>
                            <option value="sarjana">S1/Sarjana</option>
                            <option value="master">S2/Master</option>
                            <option value="doktor">S3/Doktor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" name="nama-sekolah" class="form-control sekolah" id="sekolah" onchange="tes()" placeholder="SMA Ceria Selalu">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select name="jurusan" id="jurusan" onchange="tes()" class="form-control jurusan">
                            <option value=""></option>
                            <option value="elektro">Elektro</option>
                            <option value="komputer">Teknologi Informatika</option>
                            <option value="industri">Industri</option>
                            <option value="manajemen">Manajemen</option>
                            <option value="matematika">Matematika</option>
                            <option value="fisika">Fisika</option>
                            <option value="teknik-nuklir">Teknik Nuklir</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Prestasi Akademik (Opsional)</label>
                        <textarea name="prestasi" class="form-control prestasi" id="prestasi" onchange="tes()" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tahun Lulus</label>
                        <select name="tahun-lulus" id="lulus" onchange="tes()" class="form-control lulus">
                            <option value=""></option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>IPK/Rata-rata Nilai Ujian</label>
                        <input type="text" name="nilai" class="form-control ipk" id="nilai" onchange="tes()" placeholder="0.00">
                    </div>
                    <div class="form-group">
                    </div>
            </div>
            <div class="col-md-6">
                <!-- Pengalaman Kerja -->
                <fieldset class="form-group border p-3">
                    <legend class="w-auto px-3">Pengalaman Kerja</legend>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" name="nama-perusahaan" class="form-control nama-perusahaan" id="perusahaan" onchange="tes()" placeholder="PT.Unikom">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan" id="jabatan" onchange="tes()" class="form-control jabatan">
                            <option value=""></option>
                            <option value="direktur">Direktur</option>
                            <option value="manager">Manager</option>
                            <option value="supervisior">Supervisior</option>
                            <option value="ceo">Presiden Direktur - CEO</option>
                            <option value="vice-presiden">Vice Presiden</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bidang Pekerjaan</label>
                        <select name="bidang" id="bidang" onchange="tes()" class="form-control jabatan">
                            <option value=""></option>
                            <option value="admin">Administrasi</option>
                            <option value="ilmuwan">Ilmuwan</option>
                            <option value="fotografer">Fotografer</option>
                            <option value="hukum">Hukum</option>
                            <option value="komputer">Teknologi Informatisi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <select name="lokasi-kerja" id="lokasi-kerja" onchange="tes()" class="form-control lokasi">
                            <option value=""></option>
                            <option value="bandung">Bandung</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="surabaya">Surabaya</option>
                            <option value="medan">Medan</option>
                            <option value="solo">Solo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gaji</label>
                        <input type="text" name="gaji-pengalaman" class="form-control gaji" id="pengalaman" onchange="tes()" placeholder="Rp.">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="tanggal-mulai" class="form-control tanggal-mulai" id="tanggal-mulai" onchange="tes()">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kontrak</label>
                        <select name="tipe-kontrak" id="jenis-kontrak" onchange="tes()" class="form-control jenis-kontrak">
                            <option value=""></option>
                            <option value="purna">Purna Waktu</option>
                            <option value="paruh">Paruh Waktu</option>
                            <option value="magang">Magang</option>
                            <option value="sementara">Sementara</option>
                            <option value="kontrak">Kontrak</option>
                        </select>
                    </div>
                    <div class="form-group">
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Pengalaman Organisasi -->
                <fieldset class="form-group border p-3">
                    <legend class="w-auto px-3">Pengalaman Organisasi</legend>
                    <div class="form-group">
                        <label>Nama Organisasi</label>
                        <input type="text" name="nama-organisasi" class="form-control organisasi" id="organisasi" onchange="tes()" placeholder="Osis/Unikom Organization">
                    </div>
                    <div class="form-group">
                        <label>Posisi</label>
                        <input type="text" name="posisi" class="form-control posisi" id="posisi" onchange="tes()" placeholder="Wakil Ketua">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi (Opsional)</label>
                        <textarea name="deskripsi" class="form-control deskripsi" id="deskripsi" onchange="tes()" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Periode Waktu</label>
                        <select name="periode" id="periode" onchange="tes()" class="form-control periode">
                            <option value=""></option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="form-group">
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6 justify-content-center">
                <!-- Pelatihan/Sertifikasi -->
                <fieldset class="form-group border p-3">
                    <legend class="w-auto px-3">Pelatihan/Sertifikasi</legend>
                    <div class="form-group">
                        <label>Nama Pelatihan</label>
                        <input type="text" class="form-control pelatihan" name="pelatihan" id="pelatihan" onchange="tes()" placeholder="Bootcamp Big Data">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi (Opsional)</label>
                        <textarea name="deskripsi-pelatihan" class="form-control deskripsi" id="deskripsi-pelatihan" onchange="tes()" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Dikeluarkan Oleh</label>
                        <input type="text" class="form-control penyelenggara" name="penyelenggara" id="penyelenggara" onchange="tes()" placeholder="PT.Unikom">
                    </div>
                    <div class="form-group">
                        <label>Dikeluarkan Tanggal</label>
                        <input type="date" name="tanggal-keluar" class="form-control tanggal-keluar-sertifikat" id="tanggal-sertifikat" onchange="tes()">
                    </div>
                    <div>
                        <label class="form-label">Sertifikat Pelatihan</label>
                        <input type="file" class="form-control" name="sertifikat" id="sertifikat">
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="container">
            <input type="submit" class="btn btn-outline-success btn-lg btn-block" id="tombol" value="Simpan" disabled><br>
            <input type="reset" class="btn btn-outline-danger btn-lg btn-block" value="Buang"><br>
            <a herf="#" class="btn btn-outline-primary btn-lg btn-block" >Menu Utama</a>
        </div>
    </form>
</body>
<script>
    function tes(){
        // Data Diri
        var nik = document.getElementById('nik').value;
        var nama = document.getElementById('nama').value;
        var tanggalLahir = document.getElementById('tanggal-lahir').value;
        var jenisKel = document.getElementById('jk').value;
        var status = document.getElementById('status').value;
        var kebangsaan = document.getElementById('kebangsaan').value;
        var gajiHarap = document.getElementById('gaji-harapan').value;

        // Kontak
        var telepon = document.getElementById('telepon').value;
        var hp = document.getElementById('hp').value;
        var email = document.getElementById('email').value;
        var lokasiTinggal = document.getElementById('lokasi-tinggal').value;
        var alamat = document.getElementById('alamat').value;
        var pos = document.getElementById('pos').value;

        // Pendidikan
        var pendidikan = document.getElementById('pendidikan').value;
        var sekolah = document.getElementById('sekolah').value;
        var jurusan = document.getElementById('jurusan').value;
        var prestasi = document.getElementById('prestasi').value;
        var lulus = document.getElementById('lulus').value;
        var nilai = document.getElementById('nilai').value;

        // Pengalaman Kerja
        var perusahaan = document.getElementById('perusahaan').value;
        var jabatan = document.getElementById('jabatan').value;
        var bidang = document.getElementById('bidang').value;
        var lokasiKerja = document.getElementById('lokasi-kerja').value;
        var pengalaman = document.getElementById('pengalaman').value;
        var tanggalMulai = document.getElementById('tanggal-mulai').value;
        var jenisKontrak = document.getElementById('jenis-kontrak').value;

        // Pengalaman Organisasi
        var organisasi = document.getElementById('organisasi').value;
        var posisi = document.getElementById('posisi').value;
        var deskripsi = document.getElementById('deskripsi').value;
        var periode = document.getElementById('periode').value;

        // Pelatihan/Sertifikat
        var pelatihan = document.getElementById('pelatihan').value;
        var deksripsiSertif = document.getElementById('deskripsi-pelatihan').value;
        var penyelenggara = document.getElementById('penyelenggara').value;
        var tanggalSertif = document.getElementById('tanggal-sertifikat').value;

        if (nik&&nama&&tanggalLahir&&jenisKel&&status&&kebangsaan&&gajiHarap&&
            telepon&&hp&&email&&lokasiTinggal&&alamat&&pos&&
            pendidikan&&sekolah&&jurusan&&prestasi&&lulus&&nilai&&
            perusahaan&&jabatan&&bidang&&lokasiKerja&&pengalaman&&tanggalMulai&&jenisKontrak&&
            organisasi&&posisi&&deskripsi&&periode&&
            pelatihan&&deksripsiSertif&&penyelenggara&&tanggalSertif){
            document.getElementById('tombol').disabled = false;
        }
        else {
            document.getElementById('tombol').disabled = true;
        }
    }
</script>
</html>