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
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "siloker");

		if (isset($_GET['nik'])) {
			$nik = $_GET['nik'];
			$query = "DELETE FROM `pesertabootcamp` WHERE nik = '$nik'";
			$run = mysqli_query($conn, $query);
			if ($run) {
				header('location:tabelPesertaBootcamp.php');
			} else {
				echo "Error: " . mysqli_error($conn);
			}
		}
		// header("location:table.php");
		?>
	</center>
</body>

</html>