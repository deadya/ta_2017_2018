<?php 
	session_start();
	if(empty($_SESSION['page'])) $_SESSION['page'] = "home";
?>
<html>
	<head>
		<link rel="stylesheet" href="css/page.css"/>
	</head>
	<body>
		<div class="header">
			<a href="session_pager.php?page=home">Home</a>
			<a href="session_pager.php?page=profile">Profile</a>
			<a>learn</a>
			<a>Exam</a>
			<a href="session_pager.php?page=aboutus">About Us</a>
			<a href="session_pager.php?page=contactus">Contact Us</a>
		</div>
		<div class="content">
			<?php
				switch($_SESSION['page']){
					case "home" :
						include "home.php";
					break;
					case "profile" :
						include "profile.php";
					break;
					case "aboutus" :
						include "aboutus.php";
					break;
					case "contactus" :
						include "contactus.php";
					break;
				}
			?>
		</div>
		<div class="footer">footer</div>
	</body>
</html>