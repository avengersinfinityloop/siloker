<!DOCTYPE html>
<html>

<head>
	<title>Update DB</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => nama database
		$conn = mysqli_connect("localhost", "root", "", "siloker");

		// menyimpan data kedalam variabel
		$nik = $_POST['nik'];
		$namaLengkap = $_POST['namaLengkap'];
		$email = $_POST['email'];
		$noHP  = $_POST['noHP'];
		$kota  = $_POST['kota'];
		$alamat = $_POST['alamat'];
		$pekerjaan = $_POST['pekerjaan'];
		$namaBootcamp  = $_POST['namaBootcamp'];
		$metode  = $_POST['metode'];

		// query SQL untuk update data
		$sql = "UPDATE pesertabootcamp SET nik='$nik', namaLengkap='$namaLengkap', email='$email', noHP='$noHP', kota='$kota', alamat='$alamat', pekerjaan='$pekerjaan', namaBootcamp='$namaBootcamp', metode='$metode' WHERE nik='$nik'";
		mysqli_query($conn, $sql);

		echo "<script type='text/javascript'>alert('Data dengan kode barang $nik telah berhasil di update');document.location='table.php';</script>";

		// mengalihkan ke halaman view tabel
		header("location:successUpdateDB.php");
		?>
	</center>
</body>

</html>