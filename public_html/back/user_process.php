<?php
	include "koneksi.php";
	if(isset($_POST['process'])){
		switch($_POST['process']){
			case "edit":
				$email = $_POST['email'];
				$newemail = $_POST['newemail'];
				$password = $_POST['password'];
				$nama = $_POST['nama'];
				$tgl_lhr = $_POST['tgl_lhr'];
				$alamat = $_POST['alamat'];
				$stts_akun = $_POST['stts_akun'];
				$id_level = $_POST['id_level'];
				$id_stts_pend = $_POST['id_stts_pend'];
				$cbval = $_POST['cbval'];
				if($cbval==1){
					$image = $_FILES['image'];
				}else{
					mysqli_query($connect, "UPDATE users SET 
					email='$newemail',
					password='$password',
					nama='$nama',
					tgl_lhr='$tgl_lhr',
					alamat='$alamat',
					stts_akun='$stts_akun',
					id_level='$id_level',
					id_stts_pend='$id_stts_pend'
					WHERE email='$email'");
				}
			break;
		}
	}else{
		$id = $_GET['id'];
		mysqli_query($connect, "DELETE FROM stts_pend WHERE id='$id'");
	}
	//header('Location:home.php?page=sttspend');
?>