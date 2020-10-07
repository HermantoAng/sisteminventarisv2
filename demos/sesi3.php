 <?php session_start();
	require("koneksi.php");
 ?>
 <html>
	<head></head>
	
	<body>
		<?php 
		  
		  echo $nama;
			$nama = "titit";
		  
		?>
		<a href="sesi1.php">sesi1</a>
		<?php session_destroy(); session_unset(); ?>
	</body>
	
</html>