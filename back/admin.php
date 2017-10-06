<html>
	<body>
		<?php include "koneksi.php"; ?>
		<table>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
			<?php
				$a = mysqli_query($connect, "SELECT * FROM admin");
				while($b = mysqli_fetch_array($a)){
					echo "
						<tr>
							<td>$b[username]</td>
							<td>$b[password]</td>
							<td><a href='home.php?page=admin_form&&user=$b[username]'>Edit</a></td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>