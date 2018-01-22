<?php
	include "koneksi.php";
	if(isset($_POST['process'])){
		$paket = $_POST['paket'];
		$level = $_POST['level'];
		switch($_POST['process']){
			case "add" :
				mysqli_query($connect, "INSERT INTO paket VALUES('','$paket','$level')");
			break;
			case "edit":
				$id = $_POST['id'];
				mysqli_query($connect, "UPDATE paket SET nama='$paket', id_level='$level' WHERE id='$id'");
			break;
		}
	}else{
		$id = $_GET['id'];
		mysqli_query($connect, "DELETE FROM paket WHERE id='$id'");
	}
	header('Location:home.php?page=paket');
?>