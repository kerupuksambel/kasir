<?php
	require 'db.connect.php';
	if($_GET['act'] == "nama_barang" || $_GET['act'] == "harga_barang"){
		$id = $_GET['id'];
		$query = "SELECT * FROM `barang` WHERE `id_barang` = '".$id."'";
		$q = $con->query($query);
		if ($q) {
			while ($r = $q->fetch_object()) {
				if($_GET['act'] == "nama_barang"){
					// echo $r -> nama_barang;
					if(isset($r)){
						echo $r -> nama_barang;
					}else{
						echo "-";
					}
				}elseif($_GET['act'] == "harga_barang"){
					// echo $r -> harga_jual;
					if($r -> harga_jual != ""){
						echo $r -> harga_jual;
					}else{
						echo "-";
					}
				}
			}
			$q -> close();
		}
	}elseif($_GET['act'] == "trx"){
		
	}

	$con -> close();
?>