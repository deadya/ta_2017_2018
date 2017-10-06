<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div class="panel">
			<ul>
				<li><a href="home.php?page=admin">admin</a></li>
				<li><a href="home.php?page=sttspend">status pendidikan</a></li>
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