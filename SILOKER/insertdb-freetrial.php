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
		$email = $_REQUEST['email'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO freetrialbootcamp VALUES ('$email')";

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