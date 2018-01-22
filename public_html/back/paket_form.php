<?php
	include "koneksi.php";
	$level_q = mysqli_query($connect, "SELECT * FROM level");
?>
<html>
	<body>
		<form method="POST" action="paket_process.php">
			<?php
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$paket_q = mysqli_query($connect, "SELECT * FROM paket WHERE id='$id'");
				$paket_a = mysqli_fetch_assoc($paket_q);
				echo "<input type='hidden' name='id' value='$paket_a[id]' />";
			?>
				<input type="hidden" name="process" value="edit" />
			<?php
			}else{
			?>
				<input type="hidden" name="process" value="add" />
			<?php
			}
			?>
			<table>
				<tr>
					<td>Nama Paket</td>
					<td>:</td>
					<td><input type="text" name="paket" value="<?php if(isset($_GET['id'])) echo $paket_a['nama']; ?>"/></td>
				</tr>
				<tr>
					<td>Level</td>
					<td>:</td>
					<td>
						<select name="level">
						<?php
						while($a = mysqli_fetch_array($level_q)){
							echo "<option value='".$a['id']."'";
							if(isset($_GET['id'])){
								if($a['id'] == $paket_a['id_level']){
									echo "selected";
								}
							}
							echo ">".$a['nama']."</option>";
						}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Simpan"/></td>
				</tr>
			</tabke>
		</form>
	</body>
</html>