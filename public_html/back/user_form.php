<html>
	<body>
		<form method="POST" action="user_process.php" enctype="multipart/form-data">
			<?php
			include "koneksi.php";
			if(isset($_GET['email'])){
				$id = $_GET['email'];
				$a = mysqli_query($connect, "SELECT * FROM users WHERE email='$id'");
				$b = mysqli_fetch_assoc($a);
				echo "<input type='hidden' name='email' value='$b[email]' />";
				echo "<input type='hidden' name='process' value='edit' />";
			}
			?>
			<table>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="newemail" value="<?php echo $b['email']; ?>"/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="text" name="password" value="<?php echo $b['password']; ?>"/></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $b['nama']; ?>"/></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><input type="text" name="tgl_lhr" value="<?php echo $b['tgl_lhr']; ?>"/></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" value="<?php echo $b['alamat']; ?>"/></td>
				</tr>
				<tr>
					<td>Foto</td>
					<td>:</td>
					<td>
						<input type="file" id="foto" name="image" />
						<img id="gambar" src="<?php echo $b['foto']; ?>" height="100px" width="100px"/>
						<input type="checkbox" name="cbfoto" id="cb" onclick="cba()" /> Centang untuk ganti
						<input type="hidden" id="icbval" name="cbval" />
						<script>
							document.getElementById('foto').style.display='none';
							function cba(){
								if(document.getElementById('cb').checked==true){
									document.getElementById('foto').style.display='block';
									document.getElementById('gambar').style.display='none';
									document.getElementById('icbval').value=1;
								}else{
									document.getElementById('foto').style.display='none';
									document.getElementById('gambar').style.display='block';
									document.getElementById('icbval').value=0;
								}
							}
						</script>
					</td>
				</tr>
				<tr>
					<td>Status Akun</td>
					<td>:</td>
					<td>
						<select name="stts_akun">
							<option value="1" <?php if($b['stts_akun']==1) echo "selected";?>>Aktif</option>
							<option value="0" <?php if($b['stts_akun']==0) echo "selected";?>>Tidak Aktif</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>:</td>
					<td>
						<select name="id_level">
						<?php
						$level_q = mysqli_query($connect, "SELECT * FROM level");
						while($row = mysqli_fetch_array($level_q)){
						?>
							<option value="<?php echo $row['id'];?>" <?php if($row['id']==$b['id_level']) echo "selected"; ?>><?php echo $row['nama'];?></option>";
						<?php
						}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Status Pendidikan</td>
					<td>:</td>
					<td>
					<select name="id_stts_pend">
						<?php
						$stts = mysqli_query($connect, "SELECT * FROM stts_pend");
						while($row = mysqli_fetch_array($stts)){
						?>
							<option value="<?php echo $row['id'];?>" <?php if($row['id']==$b['id_stts_pend']) echo "selected"; ?>><?php echo $row['nama'];?></option>";
						<?php
						}
						?>
						</select>
					</td>
				</tr>
				
				<tr>
					<td><input type="submit" value="update"/></td>
				</tr>
			</tabke>
		</form>
	</body>
</html>