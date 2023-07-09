<!DOCTYPE html>
<html>

<head>
	<title>The Movie Shack</title>
	<link rel="stylesheet" href="./css/styles.css">
	<style>
		.size {
			cols: 200;
			font-size: 30px;
			width: 200px;

		}
	</style>

</head>

<body>

	<?php
	$host = 'localhost';
	$user = 'root';
	$password = "";
	$db_name = 'id21003775_movies';
	$con = mysqli_connect($host, $user, $password, $db_name);
	if (mysqli_connect_errno()) {
		die("Failed to connect with MySQL: " . mysqli_connect_error());
	}

	?>


</body>

</html>