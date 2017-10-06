<?php
	include "koneksi.php";
	if(isset($_POST['user'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$a = mysqli_query($connect, "SELECT * FROM admin WHERE username='$user' AND password='$pass'");
		$b = mysqli_num_rows($a);
		if($b>0)
			header('Location:home.php?page=dashboard');
		else
			header('Location:index.php');
	}
?>