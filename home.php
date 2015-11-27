<?php
session_start();
if(!isset($_SESSION['user'])) {
	header('Location: login.php');
}
session_write_close(); 
?>

<html> 
	<head>
		<style>
			body,:visited,:active,:link {background-color: <?php echo $_SESSION['user'];?>;
			color : white;
			}
		</style>
	</head>
	<body>
		<h1> HELLO <?php echo $_SESSION['user'];?> </h1><hr/>
		<a href="private.php"> Goto Private Content </a><hr/>
		<a href="logout.php"> Logout </a>
	</body>
</html>