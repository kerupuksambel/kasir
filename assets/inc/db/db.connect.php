<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "kasir";
	$con = new mysqli($host, $user, $pass, $db);

	if(($con -> connect_errno)){
		echo "Koneksi gagal ". $con -> connect_error;
		exit();
	}
?>