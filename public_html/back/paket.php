<html>
	<body>
		<?php include "koneksi.php"; ?>
		<a href="home.php?page=paket_form">Tambah</a>
		<table>
			<th>No</th>
			<th>Nama</th>
			<th>Level</th>
			<th colspan="2">Aksi</th>
			<?php
				$c = 1;
				$a = mysqli_query($connect, "SELECT paket.id, paket.nama as paket_name, level.nama as level_name FROM paket LEFT JOIN level ON paket.id_level = level.id");
				while($b = mysqli_fetch_array($a)){
					echo "
						<tr>
							<td>$c</td>
							<td>$b[paket_name]</td>
							<td>$b[level_name]</td>
							<td><a href='home.php?page=paket_form&&id=$b[id]'>Edit</a></td>
							<td><a href='home.php?page=paket_process&&id=$b[id]'>Delete</a></td>
						</tr>
					";
					$c++;
				}
			?>
		</table>
	</body>
</html>