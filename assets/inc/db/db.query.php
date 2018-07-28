<?php
	require 'db.connect.php';
	if($_GET['act'] == "nama_barang" || $_GET['act'] == "harga_barang"){
		$id = $_GET['id'];
		$query = "SELECT * FROM `barang` WHERE `id_barang` = '".$id."'";
		$q = $con->query($query);
		$num = $q->num_rows;
		if ($num > 0) {
			while ($r = $q->fetch_object()) {
				if($_GET['act'] == "nama_barang"){
					echo $r -> nama_barang;
				}elseif($_GET['act'] == "harga_barang"){
					echo $r -> harga_jual;
				}
			}
			$q -> close();
		}else{
			echo "-";
		}
	}elseif($_GET['act'] == "trx"){
		
	}

	$con -> close();
?>