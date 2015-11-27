<?php 
session_start();
if(!isset($_SESSION['user'])) {
	header('Location: login.php');
}
session_write_close(); 
?>

<html>
<head>
	<title></title>
		<style>
			body,:visited,:active,:link {background-color: <?php echo $_SESSION['user'];?>;
			color : white;
			}
		</style>
</head>
<body>
<img src="images/<?php echo $_SESSION['user']?>.jpg"><hr/>
<a href='home.php'> GO HOME </a>
</body>
</html>