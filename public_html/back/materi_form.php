<html>
	<body>
		<form method="POST" action="materi_process.php">
			<?php
			if(isset($_GET['id'])){
				include "koneksi.php";
				$id = $_GET['id'];
				$a = mysqli_query($connect, "SELECT * FROM materi WHERE id='$id'");
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
					<td>Nama Materi</td>
					<td>:</td>
					<td><input type="text" name="materi" value="<?php if($c>0) echo $b['nama']; ?>"/></td>
				</tr>
				<tr>
					<td>Teks</td>
					<td>:</td>
					<td><input type="text" name="teks" value="<?php if($c>0) echo $b['teks']; ?>"/></td>
				</tr>
				<tr>
					<td><input type="submit" value="Simpan"/></td>
				</tr>
			</tabke>
		</form>
	</body>
</html>