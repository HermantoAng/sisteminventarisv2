<?php
		session_start();
		if(isset($_POST['logon'])){
			
		$conn = mysqli_connect("localhost","root","","tmp_db");
		$user = $_POST['username'];
		$pass = $_POST['password'];
		
		 $_SESSION['strings'] = 0;
		//	var_dump($str);
		$sql ="SELECT * FROM user";
		$query = mysqli_query($conn,$sql);
		if(!$query){
			echo 'Problem on Line 9';
		}
		$fetch = mysqli_fetch_array($query);
			if($fetch['username'] == $user && $fetch['password'] == $pass ){
				echo '<script>alert("Selamat datang'.' '.$user.'!");</script>';
				$_SESSION['strings'] = 1;
				header("refresh:1;url=sss.php");
			}else{
				echo '<script>alert("Error");</script>';
				 $_SESSION['strings'] = 0;
				header("refresh:0.3;url=index.php");
				session_unset();
				session_destroy();

			}
		
	}
	?>