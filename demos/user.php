<?php
	require('koneksi.php');
		$user_sql = "SELECT * FROM user";
		$qr = mysqli_query($conn ,$user_sql);

		$user = mysqli_fetch_assoc($qr);
?>