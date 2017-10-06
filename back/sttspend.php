<html>
	<body>
		<?php include "koneksi.php"; ?>
		<a href="home.php?page=sttspend_form">Tambah</a>
		<table>
			<th>No</th>
			<th>Status</th>
			<th colspan="2">Aksi</th>
			<?php
				$c = 1;
				$a = mysqli_query($connect, "SELECT * FROM stts_pend");
				while($b = mysqli_fetch_array($a)){
					echo "
						<tr>
							<td>$c</td>
							<td>$b[nama]</td>
							<td><a href='home.php?page=sttspend_form&&id=$b[id]'>Edit</a></td>
							<td><a href='home.php?page=sttspend_process&&id=$b[id]'>Delete</a></td>
						</tr>
					";
					$c++;
				}
			?>
		</table>
	</body>
</html>