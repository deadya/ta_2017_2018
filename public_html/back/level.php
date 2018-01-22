<html>
	<body>
		<?php
			include "koneksi.php";
			$c = 1;
			$a = mysqli_query($connect, "SELECT * FROM level");
			$d = mysqli_fetch_row(mysqli_query($connect, "SELECT MAX(id) FROM level"));
		?>
		<a href="home.php?page=level_form">Tambah</a>
		<a href="home.php?page=level_process.php?id=<?php echo $d[0]; ?>">Delete data terakhir</a>
		<table>
			<th>No</th>
			<th>level</th>
			<th>urutan</th>
			<th colspan="2">Aksi</th>
			<?php
				while($b = mysqli_fetch_array($a)){
					echo "
						<tr>
							<td>$c</td>
							<td>$b[nama]</td>
							<td>$b[urutan]</td>
							<td><a href='home.php?page=level_form&&id=$b[id]'>Edit</a></td>
						</tr>
					";
					$c++;
				}
			?>
		</table>
	</body>
</html>