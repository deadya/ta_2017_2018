<html>
	<body>
		<?php
			include "koneksi.php";
			$c = 1;
			$a = mysqli_query($connect, "SELECT * FROM materi");
		?>
		<a href="home.php?page=materi_form">Tambah</a>
		<table>
			<th>No</th>
			<th>level</th>
			<th>Teks</th>
			<th colspan="2">Aksi</th>
			<?php
				while($b = mysqli_fetch_array($a)){
					echo "
						<tr>
							<td>$c</td>
							<td>$b[nama]</td>
							<td>$b[teks]</td>
							<td><a href='home.php?page=materi_form&&id=$b[id]'>Edit</a></td>
							<td><a href='materi_process.php?id=$b[id]'>Hapus</a></td>
						</tr>
					";
					$c++;
				}
			?>
		</table>
	</body>
</html>