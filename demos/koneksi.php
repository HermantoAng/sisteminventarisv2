<?php 
		$conn = mysqli_connect("localhost","root","","tmp_db"); 
		if(!$conn){
			echo '
			<script>alert("gagal Terkoneksi ke DB");</script>	
			';
		}
?>