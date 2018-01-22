<html>
	<body>
		<?php
			include "koneksi.php";
			$c = 1;
			$a = mysqli_query($connect, "SELECT * FROM jenis");
		?>
		<table>
			<th>No</th>
			<th>level</th>
			<?php
				while($b = mysqli_fetch_array($a)){
					echo "
						<tr>
							<td>$c</td>
							<td>$b[nama]</td>
						</tr>
					";
					$c++;
				}
			?>
		</table>
	</body>
</html>