<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div class="panel">
			<ul>Master
				<li><a href="home.php?page=admin">Admin</a></li>
				<li><a href="home.php?page=sttspend">Status Pendidikan</a></li>
				<li><a href="home.php?page=level">Level</a></li>
				<li><a href="home.php?page=jenis">Jenis</a></li>
				<li><a href="home.php?page=materi">Materi</a></li>
			</ul>
			<ul>Secondary
				<li><a href="home.php?page=paket">Paket</a></li>
			</ul>
			<ul>View
				<li><a href="home.php?page=user">User</a></li>
			</ul>
		</div>
		<div class="content">
			<?php
			if(isset($_GET['page'])){
				include $_GET['page'].".php";
			}else{
				include "dashboard.php";
			}
			?>
		</div>
	</body>
</html>