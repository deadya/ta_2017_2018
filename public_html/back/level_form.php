<?php
	include "koneksi.php";
	$level_q = mysqli_query($connect, "SELECT max(urutan) as maks FROM level");
	$level_a = mysqli_fetch_row($level_q);
?>
<html>
	<body>
		<form method="POST" action="level_process.php">
			<?php
			if(isset($_GET['id'])){
				include "koneksi.php";
				$id = $_GET['id'];
				$a = mysqli_query($connect, "SELECT * FROM level WHERE id='$id'");
				$b = mysqli_fetch_assoc($a);
				$c = mysqli_num_rows($a);
				echo "<input type='hidden' name='id' value='$b[id]' />";
				echo "<input type='hidden' name='process' value='edit' />";
			}else{
				$c = 0;
				echo "<input type='hidden' name='process' value='add' />";
			}
			?>
			<table>
				<tr>
					<td>Level</td>
					<td>:</td>
					<td><input type="text" name="level" value="<?php if(isset($_GET['id'])) echo $b['nama']; ?>"/></td>
				</tr>
				<tr>
					<td>Urutan</td>
					<td>:</td>
					<td><input type="text" name="urutan" 
					<?php 
						if(isset($_GET['id'])){
							echo "value='".($b['urutan'])."' readonly";
						}else{
							echo "value='".($level_a[0]+1)."' readonly";
						}
					?>
					/></td>
				</tr>
				<tr>
					<td><input type="submit" value="Simpan"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>