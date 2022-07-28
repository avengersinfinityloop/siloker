<!-- 
    Created by :
    Nama : Muhamad Sidik Nur Rizki
    NIM : 10121901
    Kelas : IF-9

    Created on : 20220623
    page name: editprofil.php
    total line : ....line
    logs : v0.1.20220623
         : v0.2.20220624

 -->

<?php
    session_start();
    $shareUsername = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="icon" href="multimedia/image/logo/silokerlogo.png">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Profil Akun</title>
</head>
<script src="bar.js"></script>
<body>
    <?php
        require("koneksi.php");
        $nik = $_GET['nik'];
        $sql = "SELECT * FROM profil WHERE nik = '$nik'";
        $query = mysqli_query($conn,$sql);
        $row =  mysqli_fetch_array($query);

        // Membuat data select menjadi dinamis dalam bentuk Array
        $jenisKelamin = array('Pria','Wanita');
        $status = array('Lajang','Menikah','Janda/Duda');
        $kebangsaan = array('Indonesia','Asing');
        $lokasiTinggal = array('Bandung','Jakarta','Surabaya','Medan','Solo');
        $pendidikan = array('SD','SMP','SMA/SMK','Diploma/D1','Sarjana/S1','Master/S2','Doktor/S3');
        $jurusan = array('Elektro','Komputer','Industri','Manajemen','Matematika','Fisika','Teknik-Nuklir');
        $lulus = array('2016','2017','2018','2019','2020','2021','2022');
        $jabatan = array('Direktur','Manager','Supervisor','CEO','Vice-Presiden');
        $bidang = array('Admin','Ilmuan','Fotografer','Hukum','Komputer');
        $lokasiKerja = array('Bandung','Jakarta','Surabaya','Medan','Solo');
        $kontrak = array('Purna','Paruh','Magang','Sementara','Kontrak');
        $periode = array('2016','2017','2018','2019','2020','2021','2022');
    ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="multimedia/image/logo/silokerlogo.png" alt="no gambar" width="30" height="30">SILOKER
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
        <img src="multimedia/image/concept/maskotsiloker.png" alt="no gambar" style="width: 90px; height: 100px; border-radius:100px">
        <br><br>
    </center>
    <br>
    <!-- From Pengisian Profil Data Diri -->
    <form action="updateProfil.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <!-- Data Diri -->
                <fieldset class="form-group border p-3">
                    <legend class="w-auto px-3">Data Diri</legend>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control username" name="nik" value="<?php echo $row['nik'];?>" onchange="tes()" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control nik" name="username" value="<?php echo $row['username'];?>">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control nama" name="nama" value="<?php echo $row['nama'];?>" onchange="tes()" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control tanggal" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir'];?>" onchange="tes()" id="tanggal-lahir">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jk" class="form-control kelamin" onchange="tes()">
                            <?php
                                foreach($jenisKelamin as $jk){
                                    echo "<option value='$jk'";
                                    echo $row['jenis_kelamin']==$jk?'selected="selected"':'';
                                    echo ">$jk</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control status" onchange="tes()">
                            <?php
                                foreach($status as $st){
                                    echo "<option value='$st'";
                                    echo $row['status']==$st?'selected="selected"':'';
                                    echo ">$st</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kebangsaan</label>
                        <select name="kebangsaan" id="kebangsaan" class="form-control kebangsaan" onchange="tes()">
                            <?php
                                foreach($kebangsaan as $kb){
                                    echo "<option value='$kb'";
                                    echo $row['kebangsaan']==$kb?'selected="selected"':'';
                                    echo ">$kb</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gaji Yang Diharapkan</label>
                        <input type="text" name="gaji_harapan" class="form-control gaji-harapan" onchange="tes()" value="<?php echo $row['gaji_harapan'];?>" placeholder="Rp.">
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <!-- Kontak -->
                <fieldset class="form-group border p-3">
                    <legend class="w-auto px-3">Kontak</legend>
                    <div class="form-group">
                        <label>Nomor Telepon (Opsional)</label>
                        <input type="text" class="form-control telepon" name="telepon" id="telepon" value="<?php echo $row['telepon'];?>" onchange="tes()" placeholder="(022)xxxxx">
                    </div>
                    <div class="form-group">
                        <label>Nomor ponsel</label>
                        <input type="text" name="hp" class="form-control ponsel" id="hp" value="<?php echo $row['hp'];?>" placeholder="08123xxxxxx" onchange="tes()">
                    </div>
                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" name="email" class="form-control email" id="email" value="<?php echo $row['email'];?>" placeholder="andi@gmail.com" onchange="tes()">
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <select name="lokasi" id="lokasi-tinggal" class="form-control lokasi" onchange="tes()">
                            <?php
                                foreach($lokasiTinggal as $LTinggal){
                                    echo "<option value='$LTinggal' ";
                                    echo $row['lokasi']==$LTinggal?'selected="selected"':'';
                                    echo ">$LTinggal</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control alamat" rows="3" placeholder="Alamat" onchange="tes()"><?php echo $row['alamat'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="text" name="kode_pos" class="form-control pos" id="pos" value="<?php echo $row['kode_pos'];?>" placeholder="40123" onchange="tes()">
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
                            <?php
                                foreach($pendidikan as $p){
                                    echo "<option value='$p'";
                                    echo $row['pendidikan']==$p?'selected="selected"':'';
                                    echo ">$p</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" class="form-control sekolah" id="sekolah" value="<?php echo $row['nama_sekolah']; ?>" onchange="tes()" placeholder="SMA Ceria Selalu">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select name="jurusan" id="jurusan" onchange="tes()" class="form-control jurusan">
                            <?php
                                foreach($jurusan as $j){
                                    echo "<option value='$j'";
                                    echo $row['jurusan']==$j?'selected="selected"':'';
                                    echo ">$j</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Prestasi Akademik (Opsional)</label>
                        <textarea name="prestasi" class="form-control prestasi" id="prestasi" onchange="tes()" rows="3"><?php echo $row['prestasi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tahun Lulus</label>
                        <select name="tahun_lulus" id="lulus" onchange="tes()" class="form-control lulus">
                            <?php
                                foreach($lulus as $l){
                                    echo "<option value='$l'";
                                    echo $row['tahun_lulus']==$l?'selected="selected"':'';
                                    echo ">$l</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>IPK/Rata-rata Nilai Ujian</label>
                        <input type="text" name="nilai" class="form-control ipk" id="nilai" value="<?php echo $row['nilai']; ?>" onchange="tes()" placeholder="0.00">
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
                        <input type="text" name="nama_perusahaan" class="form-control nama-perusahaan" id="perusahaan" value="<?php echo $row['nama_perusahaan']; ?>" onchange="tes()" placeholder="PT.Unikom">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan" id="jabatan" onchange="tes()" class="form-control jabatan">
                            <?php
                                foreach ($jabatan as $jb){
                                echo "<option value='$jb' ";
                                echo $row['jabatan']==$jb?'selected="selected"':'';
                                echo ">$jb</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bidang Pekerjaan</label>
                        <select name="bidang" id="bidang" onchange="tes()" class="form-control jabatan">
                            <?php
                                foreach ($bidang as $b){
                                echo "<option value='$b' ";
                                echo $row['bidang']==$b?'selected="selected"':'';
                                echo ">$b</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <select name="lokasi_kerja" id="lokasi-kerja" onchange="tes()" class="form-control lokasi">
                            <?php
                                foreach ($lokasiKerja as $LKerja){
                                echo "<option value='$LKerja' ";
                                echo $row['lokasi_kerja']==$LKerja?'selected="selected"':'';
                                echo ">$LKerja</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gaji</label>
                        <input type="text" name="gaji_pengalaman" class="form-control gaji" id="pengalaman" value="<?php echo $row['gaji_pengalaman']; ?>" onchange="tes()" placeholder="Rp.">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" class="form-control tanggal-mulai" id="tanggal-mulai" value="<?php echo $row['tanggal_mulai']; ?>" onchange="tes()">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kontrak</label>
                        <select name="tipe_kontrak" id="jenis-kontrak" onchange="tes()" class="form-control jenis-kontrak">
                            <?php
                                foreach ($kontrak as $kn){
                                echo "<option value='$kn' ";
                                echo $row['tipe_kontrak']==$kn?'selected="selected"':'';
                                echo ">$kn</option>";
                                }
                            ?>
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
                        <input type="text" name="nama_organisasi" class="form-control organisasi" id="organisasi" value="<?php echo $row['nama_organisasi']; ?>" onchange="tes()" placeholder="Osis/Unikom Organization">
                    </div>
                    <div class="form-group">
                        <label>Posisi</label>
                        <input type="text" name="posisi" class="form-control posisi" id="posisi" value="<?php echo $row['posisi']; ?>" onchange="tes()" placeholder="Wakil Ketua">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi (Opsional)</label>
                        <textarea name="deskripsi" class="form-control deskripsi" id="deskripsi" onchange="tes()" rows="5"><?php echo $row['deskripsi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Periode Waktu</label>
                        <select name="periode" id="periode" onchange="tes()" class="form-control periode">
                            <?php
                                foreach($periode as $pr){
                                    echo "<option value='$l' ";
                                    echo $row['periode']==$pr?'selected="selected"':'';
                                    echo ">$pr</option>";
                                }
                            ?>
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
                        <input type="text" class="form-control pelatihan" name="pelatihan" id="pelatihan" value="<?php echo $row['pelatihan']; ?>" onchange="tes()" placeholder="Bootcamp Big Data">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi (Opsional)</label>
                        <textarea name="deskripsi_pelatihan" class="form-control deskripsi" id="deskripsi-pelatihan" onchange="tes()" rows="5"><?php echo $row['deskripsi_pelatihan']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Dikeluarkan Oleh</label>
                        <input type="text" class="form-control penyelenggara" name="penyelenggara" id="penyelenggara" value="<?php echo $row['penyelenggara']; ?>" onchange="tes()" placeholder="PT.Unikom">
                    </div>
                    <div class="form-group">
                        <label>Dikeluarkan Tanggal</label>
                        <input type="date" name="tanggal_keluar" class="form-control tanggal-keluar-sertifikat" id="tanggal-sertifikat" value="<?php echo $row['tanggal_keluar']; ?>" onchange="tes()">
                    </div>
                    <div>
                        <label class="form-label">Sertifikat Pelatihan</label>
                        <input type="file" class="form-control" name="sertifikat" value="<?php echo $row['serifikat']; ?>" id="sertifikat">
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="d-grid gap-2 col-12 mx-auto">
            <input type="submit" class="btn btn-outline-success btn-lg btn-block" id="tombol" value="Simpan"><br>
            <input type="reset" class="btn btn-outline-danger btn-lg btn-block" value="Reset">
        </div>
    </form>
</body>
<!-- <script>
    function tes(){
        // Data Diri
        var nik = document.getElementById('nik').value;
        // var username = document.getElementById('username').value;
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
</script> -->
</html>