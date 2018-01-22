<?php
	include "koneksi.php";
	if(isset($_POST['process'])){
		$sttspend = $_POST['sttspend'];
		switch($_POST['process']){
			case "add" :
				mysqli_query($connect, "INSERT INTO stts_pend VALUES('','$sttspend')");
			break;
			case "edit":
				$id = $_POST['id'];
				mysqli_query($connect, "UPDATE stts_pend SET nama='$sttspend' WHERE id='$id'");
			break;
		}
	}else{
		$id = $_GET['id'];
		mysqli_query($connect, "DELETE FROM stts_pend WHERE id='$id'");
	}
	header('Location:home.php?page=sttspend');
?>