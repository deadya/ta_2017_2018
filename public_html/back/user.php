<html>
	<body>
		<?php include "koneksi.php"; ?>
		<table>
			<th>No</th>
			<th>email</th>
			<th>password</th>
			<th>nama</th>
			<th>Tanggal Lahir</th>
			<th>alamat</th>
			<th>foto</th>
			<th>Status Akun</th>
			<th>Tanggal Gabung</th>
			<th>Level</th>
			<th>Status Pendidikan</th>
			<th colspan="2">Aksi</th>
			<?php
				$query = "
				SELECT users.email, users.password, users.nama, users.tgl_lhr, users.alamat, users.foto, users.stts_akun, users.tgl_gbng, level.nama as level, stts_pend.nama as stts_pend
				FROM users 
				LEFT JOIN level 
				ON users.id_level = level.id
				LEFT JOIN stts_pend 
				ON users.id_stts_pend = stts_pend.id
				";
				$c = 1;
				$a = mysqli_query($connect, $query);
				while($b = mysqli_fetch_array($a)){
					echo "
						<tr>
							<td>$c</td>
							<td>$b[email]</td>
							<td>$b[password]</td>
							<td>$b[nama]</td>
							<td>$b[tgl_lhr]</td>
							<td>$b[alamat]</td>
							<td>
							<img src='$b[foto]' width='100px' height='100px'/>
							</td>
							<td>$b[stts_akun]</td>
							<td>$b[tgl_gbng]</td>
							<td>$b[level]</td>
							<td>$b[stts_pend]</td>
							<td><a href='home.php?page=user_form&&email=$b[email]'>Edit</a></td>
							<td><a href='home.php?page=user_process&&email=$b[email]'>Delete</a></td>
						</tr>
					";
					$c++;
				}
			?>
		</table>
	</body>
</html>