<!-- 
    Created by :
    Nama : Muhamad Sidik Nur Rizki
    NIM : 10121901
    Kelas : IF-9

    Created on : 20220710
    page name: updateProfil.php
    total line : ....line
    logs : v0.1.20220710

 -->

<?php
    session_start();
    $shareUsername = $_SESSION['username'];
?>

<?php
    require("fungsi.php");
    // Variable Data Profil

    // Data Diri
    $nik = $_POST['nik'];
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $tanggalLahir = $_POST['tanggal_lahir'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $status = $_POST['status'];
    $kebangsaan = $_POST['kebangsaan'];
    $gajiHarapan = $_POST['gaji_harapan'];
    // Kontak
    $telepon = $_POST['telepon'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $lokasi = $_POST['lokasi'];
    $alamat = $_POST['alamat'];
    $kodePos = $_POST['kode_pos'];
    // Pendidikan
    $pendidikan = $_POST['pendidikan'];
    $namaSekolah = $_POST['nama_sekolah'];
    $jurusan = $_POST['jurusan'];
    $prestasi = $_POST['prestasi'];
    $tahunLulus = $_POST['tahun_lulus'];
    $nilai = $_POST['nilai'];
    // Pengalaman Kerja
    $namaPerusahaan = $_POST['nama_perusahaan'];
    $jabatan = $_POST['jabatan'];
    $bidang = $_POST['bidang'];
    $lokasiKerja = $_POST['lokasi_kerja'];
    $gajiPengalaman = $_POST['gaji_pengalaman'];
    $tanggalMulai = $_POST['tanggal_mulai'];
    $tipeKontrak = $_POST['tipe_kontrak'];
    // Pengalaman Organisasi
    $namaOrganisasi = $_POST['nama_organisasi'];
    $posisi = $_POST['posisi'];
    $deskripsi = $_POST['deskripsi'];
    $periode = $_POST['periode'];
    // Pelatihan / Sertifikat
    $pelatihan = $_POST['pelatihan'];
    $deskripsiPelatihan = $_POST['deskripsi_pelatihan'];
    $penyelenggara = $_POST['penyelenggara'];
    $tanggalKeluar = $_POST['tanggal_keluar'];

    // Query untuk update data pengguna
    // $sql = "UPDATE profil SET nik='$nik', username='$username', nama='$nama', tanggal_lahir='$tanggalLahir', jenis_kelamin='$jenisKelamin', status='$status', kebangsaan='$kebangsaan', gaji_harapan='$gajiHarapan'
    // ,'telepon=$telepon', hp='$hp', email='$email', lokasi='$lokasi', alamat='$alamat', kode_pos='$kodePos'
    // , pendidikan='$pendidikan', nama_sekolah='$namaSekolah', jurusan='$jurusan', prestasi='$prestasi', tahun_lulus='$tahunLulus', nilai='$nilai'
    // , nama_perusahaan='$namaPerusahaan', jabatan='$jabatan', bidang='$bidang', lokasi_kerja='$lokasiKerja', gaji_pengalaman='$gajiPengalaman', tanggal_mulai='$tanggalMulai', tipe_kontrak='$tipeKontrak'
    // , nama_organisasi='$namaOrganisasi', posisi='$posisi', deskripsi='$deskripsi', periode='$periode', pelatihan='$pelatihan', deskripsi_pelatihan='$deskripsiPelatihan', penyelenggara='$penyelenggara', tanggal_keluar='$tanggalKeluar'
    // WHERE nik='$nik'";

    $sql = "UPDATE profil SET nik='$nik', username='$username', nama='$nama', tanggal_lahir='$tanggalLahir', jenis_kelamin='$jenisKelamin', status='$status', kebangsaan='$kebangsaan', gaji_harapan='$gajiHarapan' 
            , telepon='$telepon', hp='$hp', email='$email', lokasi='$lokasi', alamat='$alamat', kode_pos='$kodePos'
            , pendidikan='$pendidikan', nama_sekolah='$namaSekolah', jurusan='$jurusan', prestasi='$prestasi', tahun_lulus='$tahunLulus', nilai='$nilai'
            , nama_perusahaan='$namaPerusahaan', jabatan='$jabatan', bidang='$bidang', lokasi_kerja='$lokasiKerja', gaji_pengalaman='$gajiPengalaman', tanggal_mulai='$tanggalMulai', tipe_kontrak='$tipeKontrak'
            , nama_organisasi='$namaOrganisasi', posisi='$posisi', deskripsi='$deskripsi', periode='$periode'
            , pelatihan='$pelatihan', deskripsi_pelatihan='$deskripsiPelatihan', penyelenggara='$penyelenggara', tanggal_keluar='$tanggalKeluar'
        WHERE nik='$nik'";

    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>alert('Data dengan nik $nik telah berhasil di update');document.location='cekProfil.php';</script>";
    // header('location:cekProfil.php');
?>