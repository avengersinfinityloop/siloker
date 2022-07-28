<!-- 
	Created by:
	NIM			: 10121918
	Nama		: Ahmad Nasir
	Kelas		: IF9
	Kelompok	: AIL
 -->

<!DOCTYPE html>
<html>

<head>
	<title>Daftar Bootcamp</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => nama database
		$conn = mysqli_connect("localhost", "root", "", "siloker");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$nik = $_REQUEST['nik'];
		$namaLengkap = $_REQUEST['namaLengkap'];
		$email = $_REQUEST['email'];
		$noHP = $_REQUEST['noHP'];
		$kota = $_REQUEST['kota'];
		$alamat = $_REQUEST['alamat'];
		$pekerjaan = $_REQUEST['pekerjaan'];
		$namaBootcamp = $_REQUEST['namaBootcamp'];
		$metode = $_REQUEST['metode'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO pesertabootcamp VALUES ('$nik','$namaLengkap',
			'$email','$noHP','$kota','$alamat','$pekerjaan','$namaBootcamp','$metode')";

		if (mysqli_query($conn, $sql)) {
			header('location:successRegisterToDB.php');
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}


		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>