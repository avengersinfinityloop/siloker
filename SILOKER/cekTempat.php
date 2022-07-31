    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220623
        page name               :cekTempat.php
        logs                    :v1.0 20220623 - create file
                                :v1.0 20220731 - finish file
        [Table of contents]     :1 QUERY                                        Line 27
                                :2 HEADER NAVBAR MENU                           Line 84
                                :3 CONTENT                                      Line 152
                                :   3.1 TABLE IKLAN                             Line 154
                                :       3.1.1 NAVIGASI                          Line 157
                                :       3.1.2 HEADER                            Line 178
                                :       3.1.3 ISI TABLE                         Line 190
                                :       3.1.4 BUTTON DAFTAR                     Line 203
                                :       3.1.5 BUTTON KEMBALI                    Line 214
                                :   3.2 TABLE DAFTAR IKLAN                      Line 220
                                :       3.2.1 NAVIGASI                          Line 233
                                :       3.2.2 HEADER                            Line 257
                                :       3.2.3 ISI TABLE                         Line 271
                                :       3.2.4 BUTTON VIEW                       Line 279
                                :       3.2.5 BUTTON DELETE                     Line 289
                                :4 FOOTER                                       Line 311
    -->

<!-- 1 QUERY -->
<?php
    require "fungsi.php";
    
    //tampilan USER yang sedang LOGIN
    session_start();
    $shareUsername = $_SESSION['username'];
    $nik = cekNik($shareUsername);
    if ($nik == 0) {
        $infoNik = ' - BIO TIDAK LENGKAP!';
        $hideMenu = 1;
    }

    //CONTENT IKLAN
    $RowPerHalIklan = 10;
    $RowIklan = mysqli_num_rows(mysqli_query($conn,"SELECT * from pasang_iklan"));
    $HalPerPageIklan = ceil($RowIklan / $RowPerHalIklan);
    $halAktifIklan = (isset($_GET["halIklan"])) ? $_GET["halIklan"] : 1;
    $awalDataIklan = ($RowPerHalIklan * $halAktifIklan)-$RowPerHalIklan;
    $noIklan=$awalDataIklan; //tampilan nomor
    $query  = mysqli_query($conn, "SELECT * FROM pasang_iklan LIMIT $awalDataIklan, $RowPerHalIklan "); //query pada with PAGINATION

    //CONTENT DAFTAR IKLAN BERDASARKAN NIK YANG SUDAH TERDAFTAR
    $RowPerHalDaftar = 5;
    $RowDaftar = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `daftar_kursus` WHERE nik = $nik"));
    $HalPerPageDaftar = ceil($RowDaftar / $RowPerHalDaftar);
    $halAktifDaftar = (isset($_GET["halDaftar"])) ? $_GET["halDaftar"] : 1;
    $awalDataDaftar = ($RowPerHalDaftar * $halAktifDaftar)-$RowPerHalDaftar;
    $noDaftar=$awalDataDaftar; //tampilan nomor
    $query2 = mysqli_query($conn, "SELECT daftar_kursus.idDaftar,daftar_kursus.nik,daftar_kursus.idIklan,daftar_kursus.tanggal,pasang_iklan.imageRegister FROM daftar_kursus INNER JOIN pasang_iklan on daftar_kursus.idIklan = pasang_iklan.idIklan WHERE daftar_kursus.nik = $nik ORDER BY tanggal LIMIT $awalDataDaftar, $RowPerHalDaftar "); //query pada table with PAGINATION
    $query3 = mysqli_query($conn, "SELECT idDaftar FROM `daftar_kursus` WHERE nik = $nik"); //query untuk tampilan select dan di DELETE
    //CONTENT DAFTAR IKLAN >>> DENGAN MENGGUNAKAN BUTTON DELETE MAKA AKAN DELETE ROW DI DATABASE
    if(isset($_POST['delete'])){ //berjalan ketika FORM di delete
        $idDelete = $_POST['selectDel']; //mengambil data ID
        $query4 = mysqli_query($conn, "DELETE FROM daftar_kursus WHERE idDaftar = $idDelete"); //query untuk DELETE dari DATABASE
        //refresh tampilan setelah delete
        $query2 = mysqli_query($conn, "SELECT * FROM `daftar_kursus` WHERE nik = $nik ORDER BY tanggal");
        $query3 = mysqli_query($conn, "SELECT idDaftar FROM `daftar_kursus` WHERE nik = $nik");
    }
    //CONTENT DAFTAR IKLAN >>> HIDE TABLE APABILA TIDAK ADA ROW
    if (mysqli_num_rows($query2) < 1) {
        $hideMenu1 = 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KURSUS</title>
    <link rel="icon" href="multimedia/image/logo/silokerlogo.png">
    <link rel="stylesheet" href="css/jmr.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<!-- 2 HEADER NAVBAR MENU -->
<div class="">
    <div class=" jpageHeader fixed-top">
        <nav class="container navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="justify-content-start me-3">
                    <img src="multimedia/image/logo/silokerwithtextlogo.png" alt="" width="100" height="30" class="align-text-bottom">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                        LOKER
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="dashloker.php">MENU UTAMA</a></li>
                            <li><a class="dropdown-item" href="loker.php">MAIN LOKER</a></li>
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
                <div class="d-flex">
                    <b class="me-2">
                        <?php if ($shareUsername != '') : ?>
                            <?php echo $shareUsername.$infoNik; ?>
                            <a href='index.php' class="btn">LOGOUT</a>
                        <?php else : ?>
                            <a href='index.php' class="btn">LOGIN</a>
                        <?php endif ?>
                    </b>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- 3 CONTENT -->
<div class="">
<!-- 3.1 TABLE IKLAN -->
    <div class="jpageCon1">
        <div class="container jIklan">
<!-- 3.1.1 NAVIGASI -->
            <div class="pagination mb-3">
                <?php if($halAktifIklan > 1) : ?>
                    <a class="jpagination" href="? halIklan=<?= $halAktifIklan - 1 ?>" >Previous</a>
                <?php else : ?>
                    <a class="jpagination" href="" >Previous</a>
                <?php endif; ?>
                <?php for($i = 1; $i <= $HalPerPageIklan; $i++) :?>
                    <?php if( $i == $halAktifIklan) : ?>
                        <a class="jpagination" href="?halIklan=<?= $i  ?>" style="font-weight:bold; color:red;"><?= $i  ?></a>
                    <?php else : ?>
                        <a class="jpagination" href="?halIklan=<?= $i  ?>"><?= $i  ?></a>
                    <?php endif ; ?>
                <?php endfor; ?>
                <?php if($halAktifIklan < $HalPerPageIklan) : ?>
                    <a class="jpagination" href="?halIklan=<?= $halAktifIklan + 1; ?>">Next</a>
                <?php else : ?>
                    <a class="jpagination" href="" >Next</a>
                <?php endif; ?>
            </div>
            <table class="table table-hover">
<!-- 3.1.2 HEADER -->
                <tr style="background-color: #C5C6C7;">
                    <th width="50px">NO</th>
                    <th width="110px">ID IKLAN</th>
                    <th>NAMA KURSUS</th>
                    <th>BIDANG</th>
                    <th>HARGA</td>
                    <th>WILAYAH</th>
                    <th width="100px">BANNER</th>
                    <th width="100px">ACTION</th>
                </tr>
                <tr class="spacer table-group-divider"><td colspan="100"></td></tr>
<!-- 3.1.3 ISI TABLE -->
                <?php
                while($result    =mysqli_fetch_array($query)){
                $noIklan++
                ?>
                <tr>
                    <td><?php echo $noIklan?></td>
                    <td><?php echo $result['idIklan']?></td>
                    <td><?php echo $result['namaKursus']?></td>
                    <td><?php echo $result['bidang']?></td>
                    <td><?php echo $result['harga']?></td>
                    <td><?php echo $result['wilayah']?></td>
                    <td><img src="<?php echo $result['imageRegister']?>" height="40px" width="auto"></td>
<!-- 3.1.4 BUTTON DAFTAR -->
                    <td>
                        <?php if ($hideMenu != 1) : ?>
                            <a href="submit.php?idIklan=<?=$result['idIklan']?>" class="btn btn-outline-secondary">DAFTAR</a>
                        <?php endif ?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
<!-- 3.1.5 BUTTON KEMBALI -->
            <div class="text-end mb-3">
                <a href="kursus.php"><input class="me-3 btn btn-outline-secondary" type="button" value="KEMBALI KE LAPTOP"></a>
            </div>
        </div>
    </div>
<!-- 3.2 TABLE DAFTAR IKLAN -->
    <?php if ($hideMenu1 != 1) : ?>
    <div class="jpageCon2">
        <div class="container jdaftarIklan text-center">
            <h2 align="center" class="mt-3">DAFTAR IKLAN "<?php echo $shareUsername; ?>"</h2><br>
            <div class="row justify-content-center">
                <div class="col-xl-3">
                    <div class="maskot2">
                        <img src="multimedia/image/concept/maskotsiloker.png" alt="">
                    </div>
                </div>
                <div class="col-xl-9">
                    <table class="table">
<!-- 3.2.1 NAVIGASI -->
                        <tr>
                            <td colspan="7" align="left">
                                <div class="pagination">
                                    <?php if($halAktifDaftar > 1) : ?>
                                        <a class="jpagination" href="? halDaftar=<?= $halAktifDaftar - 1 ?>" >Previous</a>
                                    <?php else : ?>
                                        <a class="jpagination" href="" >Previous</a>
                                    <?php endif; ?>
                                    <?php for($i = 1; $i <= $HalPerPageDaftar; $i++) :?>
                                        <?php if( $i == $halAktifDaftar) : ?>
                                            <a class="jpagination" href="?halDaftar=<?= $i  ?>" style="font-weight:bold; color:red;"><?= $i  ?></a>
                                        <?php else : ?>
                                            <a class="jpagination" href="?halDaftar=<?= $i  ?>"><?= $i  ?></a>
                                        <?php endif ; ?>
                                    <?php endfor; ?>
                                    <?php if($halAktifDaftar < $HalPerPageDaftar) : ?>
                                        <a class="jpagination" href="?halDaftar=<?= $halAktifDaftar + 1; ?>">Next</a>
                                    <?php else : ?>
                                        <a class="jpagination" href="" >Next</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
<!-- 3.2.2 HEADER -->
                        <tr class="table-dark">
                            <th width="50px">NO</th>
                            <th>ID DAFTAR</td>
                            <th>NIK</td>
                            <th>ID IKLAN</th>
                            <th width="120px">TANGGAL DAFTAR</th>
                            <th width="100px">BANNER</th>
                            <th width="100px">ACTION</th>
                        </tr>
                        <?php
                        while($result2 = mysqli_fetch_array($query2)){
                        $noDaftar++
                        ?>
<!-- 3.2.3 ISI TABLE -->
                        <tr>
                            <td><?php echo $noDaftar?></td>
                            <td><?php echo $result2['idDaftar']?></td>
                            <td><?php echo $result2['nik']?></td>
                            <td><?php echo $result2['idIklan']?></td>
                            <td><?php echo $result2['tanggal']?></td>
                            <td><img src="<?php echo $result2['imageRegister']?>" height="40px" width="auto"></td>
<!-- 3.2.4 BUTTON VIEW -->
                            <td>
                                <?php if ($hideMenu != 1) : ?>
                                    <a href="submit.php?idIklan=<?=$result2['idIklan']?>&view=1" class="btn btn-outline-secondary">VIEW</a>
                                <?php endif ?>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
<!-- 3.2.5 BUTTON DELETE -->
                        <tr>
                        <form method="post">
                            <td colspan="7" align="right">
                                <div class="mx-2">DELETE BY ID</div>
                                <select name="selectDel">
                                    <option value="">PILIH</option>
                                <?php while($result3 = mysqli_fetch_array($query3)) : ?>
                                    <option value="<?php echo $result3['idDaftar']?>"><?php echo $result3['idDaftar']?></option>
                                <?php endwhile ?>
                                </select>
                                <input type="submit" name="delete" value="DELETE" class="btn btn-outline-secondary mx-2">
                            </td>
                        </form>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
</div>
<!-- 4 FOOTER -->
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
</body>
</html>