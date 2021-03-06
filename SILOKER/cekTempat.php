    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220623
        page name               :cekTempat.html
        total                   :??? pages
        logs                    :v1.0 20220623 - create file
                                :v1.0 20220722 - finish file
        [Table of contents]
    -->

<?php
    require "fungsi.php";
    
    //PAGE SELANJUTNYA YANG MENDAPAT VARIABLE
    session_start();
    $shareUsername = $_SESSION['username'];
    $nik = cekNik($shareUsername);

    //CONTENT IKLAN
    $RowPerHalIklan = 10;
    // $RowIklan = count(cekRow("SELECT * from pasang_iklan"));
    $RowIklan = mysqli_num_rows(mysqli_query($conn,"SELECT * from pasang_iklan"));
    $HalPerPageIklan = ceil($RowIklan / $RowPerHalIklan);
    $halAktifIklan = (isset($_GET["halIklan"])) ? $_GET["halIklan"] : 1;
    $awalDataIklan = ($RowPerHalIklan * $halAktifIklan)-$RowPerHalIklan;
    $noIklan=$awalDataIklan; //tampilan nomor pada table IKLAN
    $query  = mysqli_query($conn, "SELECT * FROM pasang_iklan LIMIT $awalDataIklan, $RowPerHalIklan "); //query pada table IKLAN with PAGINATION

    //CONTENT LIST DAFTAR BY IDUSER
    $RowPerHalDaftar = 5;
    $RowDaftar = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `daftar_kursus` WHERE nik = $nik"));
    $HalPerPageDaftar = ceil($RowDaftar / $RowPerHalDaftar);
    $halAktifDaftar = (isset($_GET["halDaftar"])) ? $_GET["halDaftar"] : 1;
    $awalDataDaftar = ($RowPerHalDaftar * $halAktifDaftar)-$RowPerHalDaftar;
    $noDaftar=$awalDataDaftar; //tampilan nomor pada table LIST DAFTAR
    $query2 = mysqli_query($conn, "SELECT * FROM `daftar_kursus` WHERE nik = $nik ORDER BY tanggal LIMIT $awalDataDaftar, $RowPerHalDaftar "); //query pada table LIST DAFTAR
    $query3 = mysqli_query($conn, "SELECT idDaftar FROM `daftar_kursus` WHERE nik = $nik"); //query untuk tampilan select dan di DELETE
    //CONTENT LIST DAFTAR >>> DENGAN MENGGUNAKAN BUTTON DELETE MAKA AKAN DELETE ROW DI DATABASE
    if(isset($_POST['delete'])){ //berjalan ketika FORM di delete
        $idDelete = $_POST['selectDel']; //mengambil data ID
        $query4 = mysqli_query($conn, "DELETE FROM daftar_kursus WHERE idDaftar = $idDelete"); //query untuk DELETE dari DATABASE
        //refresh tampilan table LIST DAFTAR setelah delete
        $query2 = mysqli_query($conn, "SELECT * FROM `daftar_kursus` WHERE nik = $nik ORDER BY tanggal");
        $query3 = mysqli_query($conn, "SELECT idDaftar FROM `daftar_kursus` WHERE nik = $nik");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KURSUS</title>
    <link rel="icon" href="multimedia/image/icon joy mode.jpeg">
    <link rel="stylesheet" href="css/jmr.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<!-- HEADER -->
<div class="">
    <div class=" jpageHeader fixed-top">
        <nav class="container navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><b>SILOKER</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LOKER
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="dashloker.php">MENU UTAMA</a></li>
                            <li><a class="dropdown-item" href="loker.php">MAIN LOKER</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        KURSUS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="kursus.php">MENU</a></li>
                            <li><a class="dropdown-item" href="cekTempat.php">CEK TEMPAT</a></li>
                            <li><a class="dropdown-item" href="pasangIklan.php">PASANG IKLAN</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        BOOTCAMP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="about.php">ABOUT</a></li>
                            <li><a class="dropdown-item" href="digitalMarketing.php">DIGITAL MARKETING</a></li>
                            <li><a class="dropdown-item" href="fullStackWebDevelopment.php">FULL STACK WEB DEVELOPMENT</a></li>
                            <li><a class="dropdown-item" href="indexBootcamp.php">INDEX BOOTCAMP</a></li>
                            <li><a class="dropdown-item" href="uiUx.php">UI UX</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PROFILE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="profil.php">MENU</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                <div class="d-flex">
                    <b class="me-2">
                        <?php 
                            if ($shareUsername != '') {
                                echo $shareUsername ;
                            } else {
                                echo "<a href='index.php' class=''>LOGIN</a>";
                            }
                        ?>
                    </b>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- CONTENT -->
<div class="">
    <!-- IKLAN -->
    <div class="jpageCon1">
        <div class="container">
            <!-- navigasi -->
            <div class="pagination mb-3">
                <?php if($halAktifIklan > 1) : ?>
                    <a class="page-link" href="? halIklan=<?= $halAktifIklan - 1 ?>" >Previous</a>
                <?php else : ?>
                    <a class="page-link" href="" >Previous</a>
                <?php endif; ?>
                <?php for($i = 1; $i <= $HalPerPageIklan; $i++) :?>
                    <?php if( $i == $halAktifIklan) : ?>
                        <a class="page-link" href="?halIklan=<?= $i  ?>" style="font-weight:bold; color:red;"><?= $i  ?></a>
                    <?php else : ?>
                        <a class="page-link" href="?halIklan=<?= $i  ?>"><?= $i  ?></a>
                    <?php endif ; ?>
                <?php endfor; ?>
                <?php if($halAktifIklan < $HalPerPageIklan) : ?>
                    <a class="page-link" href="?halIklan=<?= $halAktifIklan + 1; ?>">Next</a>
                <?php else : ?>
                    <a class="page-link" href="" >Next</a>
                <?php endif; ?>
            </div>
            <table class="table table-bordered table-striped tableIklan">
                <tr>
                    <th width="50px">No</th>
                    <th>namaKursus</th>
                    <th>bidang</th>
                    <th>harga</td>
                    <th>wilayah</th>
                    <th>idIklan</th>
                    <th width="80px">Action</th>
                </tr>
                <?php
                while($result    =mysqli_fetch_array($query)){
                $noIklan++
                ?>
                <tr>
                    <td><?php echo $noIklan?></td>
                    <td><?php echo $result['namaKursus']?></td>
                    <td><?php echo $result['bidang']?></td>
                    <td><?php echo $result['harga']?></td>
                    <td><?php echo $result['wilayah']?></td>
                    <td><?php echo $result['idIklan']?></td>
                    <td><a href="submit.php?idIklan=<?=$result['idIklan']?>">DAFTAR</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            <div class="text-end mb-3">
                <a href="kursus.php"><input class="me-3 btn btn-outline-secondary" type="button" value="KEMBALI KE LAPTOP"></a>
            </div>
        </div>
    </div>
    <!-- LIST DAFTAR -->
    <div class="jpageCon2">
        <div class="container">
            <h2 align="center">INFORMASI LIST YANG SUDAH DAFTAR  <br> BY ID USER <?php echo $nik ?></h2><br><br>
            <!-- navigasi -->
            <div class="pagination mb-3">
                <?php if($halAktifDaftar > 1) : ?>
                    <a class="page-link" href="? halDaftar=<?= $halAktifDaftar - 1 ?>" >Previous</a>
                <?php else : ?>
                    <a class="page-link" href="" >Previous</a>
                <?php endif; ?>
                <?php for($i = 1; $i <= $HalPerPageDaftar; $i++) :?>
                    <?php if( $i == $halAktifDaftar) : ?>
                        <a class="page-link" href="?halDaftar=<?= $i  ?>" style="font-weight:bold; color:red;"><?= $i  ?></a>
                    <?php else : ?>
                        <a class="page-link" href="?halDaftar=<?= $i  ?>"><?= $i  ?></a>
                    <?php endif ; ?>
                <?php endfor; ?>
                <?php if($halAktifDaftar < $HalPerPageDaftar) : ?>
                    <a class="page-link" href="?halDaftar=<?= $halAktifDaftar + 1; ?>">Next</a>
                <?php else : ?>
                    <a class="page-link" href="" >Next</a>
                <?php endif; ?>
            </div>
            <table class="table table-bordered table-striped tableIklan">
                <tr>
                    <th width="50px">No</th>
                    <th>idDaftar</td>
                    <th>nik</td>
                    <th>idIklan</th>
                    <th width="100px">tanggal</th>
                </tr>
                <?php
                while($result2 = mysqli_fetch_array($query2)){
                $noDaftar++
                ?>
                <tr>
                    <td><?php echo $noDaftar?></td>
                    <td><?php echo $result2['idDaftar']?></td>
                    <td><?php echo $result2['nik']?></td>
                    <td><?php echo $result2['idIklan']?></td>
                    <td><?php echo $result2['tanggal']?></td>
                </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="5" align="right"><div class="me-5">DELETE BY ID</div></td>
                </tr>
                <tr>
                <form method="post">
                    <td colspan="5" align="right">
                    <select name="selectDel">
                        <?php while($result3 = mysqli_fetch_array($query3)) : ?>
                            <option value="<?php echo $result3['idDaftar']?>"><?php echo $result3['idDaftar']?></option>
                        <?php endwhile ?>
                    </select>
                        <input type="submit" name="delete" value="DELETE" class="btn btn-outline-secondary mx-3">
                    </td>
                </form>
                </tr>
            </table>
            <div class="text-end">
                <a href="kursus.php"><input class="me-3 btn btn-outline-secondary" type="button" value="KEMBALI KE LAPTOP"></a>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER -->
<div class="jpageFooter">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <iframe name="footer" scrolling="no" src="footer.html" class="jfooter">404 not found</iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jmr.js"></script>
</body>
</html>