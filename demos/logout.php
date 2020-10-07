<?php 
		session_start();
		echo '<script>alert("Berhasil Log Out!");</script>';
		session_unset();
		session_destroy();
		
		$_SESSION['strings'] = 0;
		header("location:index.php");
	
?>