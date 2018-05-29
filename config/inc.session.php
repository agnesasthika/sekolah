<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		# code...
		include "login.php";
		exit;
	}
 ?>