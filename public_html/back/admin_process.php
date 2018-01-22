<?php
	include "koneksi.php";
	if(isset($_POST['user_id'])){
		$user_id = $_POST['user_id'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$a = mysqli_query($connect, "UPDATE admin SET username='$user', password='$pass' WHERE username='$user_id'");
		header('Location:home.php?page=admin');
	}
?>