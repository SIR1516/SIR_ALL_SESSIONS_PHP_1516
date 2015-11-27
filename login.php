<?php
session_start();
if (isset($_SESSION['user'])) {
	header('Location: home.php');
} else if (isset($_GET['log'])) {
	$_SESSION['user'] = $_GET['log'];
	header('Location: home.php');
}
session_write_close(); 
?>
<hr/>
<a href="login.php?log=red"> red </a>
<hr/>
<a href="login.php?log=green"> green </a>
<hr/>
<a href="login.php?log=blue"> blue </a>