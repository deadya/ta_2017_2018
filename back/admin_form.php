<?php
	include "koneksi.php";
	
	if(isset($_GET['user'])){
		$a = mysqli_query($connect, "SELECT * FROM admin WHERE username='$_GET[user]'");
		$b = mysqli_fetch_assoc($a);
	}
?>
<html>
	<body>
		<form method="POST" action="admin_process.php">
			<input type="hidden" name="user_id" value="<?php echo $b['username']; ?>"/>
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="user" value="<?php echo $b['username']; ?>"/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="text" name="pass" value="<?php echo $b['password']; ?>"/></td>
				</tr>
				<tr>
					<td colspan="3"><input type="submit" value="update"/></td>
				</tr>
			</tabke>
		</form>
	</body>
</html>