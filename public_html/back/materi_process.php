<?php
	include "koneksi.php";
	if(isset($_POST['process'])){
		$materi = $_POST['materi'];
		$teks = $_POST['teks'];
		switch($_POST['process']){
			case "add" :
				mysqli_query($connect, "INSERT INTO materi VALUES('','$materi','$teks')");
			break;
			case "edit":
				$id = $_POST['id'];
				mysqli_query($connect, "UPDATE materi SET nama='$materi', teks='$teks' WHERE id='$id'");
			break;
		}
	}else{
		$id = $_GET['id'];
		mysqli_query($connect, "DELETE FROM materi WHERE id='$id'");
	}
	header('Location:home.php?page=materi');
?>