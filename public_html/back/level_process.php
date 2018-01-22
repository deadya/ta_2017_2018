<?php
	include "koneksi.php";
	if(isset($_POST['process'])){
		switch($_POST['process']){
			case "add" :
				$level = $_POST['level'];
				$urutan = $_POST['urutan'];
				mysqli_query($connect, "INSERT INTO level VALUES('','$level','$urutan')");
			break;
			case "edit":
				$id = $_POST['id'];
				$level = $_POST['level'];
				$urutan = $_POST['urutan'];
				mysqli_query($connect, "UPDATE level SET nama='$level', urutan='$urutan' WHERE id='$id'");
			break;
		}
	}else{
		$id = $_GET['id'];
		mysqli_query($connect, "DELETE FROM level WHERE id='$id'");
	}
	header('Location:home.php?page=level');
?>