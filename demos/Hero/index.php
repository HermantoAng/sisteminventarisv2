<!DOCTYPE html >

	<?php session_start(); 
		
	?>	
<html lang="id">
	
	<head>
		<link rel="icon" type="image/gif" href="image/ico/ico1.png">
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="view" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<link rel="stylesheet" type="text/css" href="css/assets/css/popup.css">

		<style type="text/css">
			*{
				margin:0 auto;
				padding:0;
				
			}
			html,body{
				min-height:100%;
				
			}
			body{
				max-width:100%;
				font-family:arial-black;
				background: url("image/ico/ss.jpg");
				background-size: cover;
			}
			header{
				height:200px;
				
				
			}
			nav{
				
			}
			.bt-nv{

				
			}
			.forms{
				width:24%;
				height:345px;
				background:#fff;
				margin:0 auto;
				opacity: 0.8;
				border-radius: 25px;
			}
			.forms h1{
				font-family: font6;
				background: green;
				border-top-left-radius:25px;
				border-top-right-radius:25px;
				color:#fff;
				 opacity:0.5;
				 text-align:center;
				 padding-top:10px;
				padding:10px;
				padding-top: 5px;	
				font-size: 4em;	
				opacity: 1;
				position: initial;
				line-height: 80px;
			}	
			.uls{
				padding-top:5	0px;	
			}
			.footer{
				
			}
			.form-content{width:65%;height:98%;padding:20px; margin-top: 2px;}
			.form-content label{padding:2px;font-size:18px;}
			input[type=text],input[type=password]{
				width:100%;
				height:25px;
				line-height:30px;
				border:1.6px solid #aaaaaa;
				transition:0.2s;
				word-spacing:0.5px;
			}
			input[type=text]:hover,input[type=password]:hover{
				border:1.6px solid dodgerblue;
				
				transition:0.2s;
			}
			
		
			input[type=submit]{
				width:100%;
				height:35px;
				line-height:35px;
				background:dodgerblue;
				border:0;
				color:#fff;
				font-size:18px;
				padding:8px;
				margin-left:5px;
				cursor:pointer;
		}
		.bttn-send{
			transition:0.4s;
			}
		.bttn-send:hover{
				box-shadow: 4px 3px 10px #aaaaaa;	
				transition:0.4s;

			}
			</style>
		</head>
		
		<body>
	
	<header style="">
		<div class="hdr-img" style="z-index:-1;">
			<img src="image/ico/smk.png" style="width:100px;height:100px;position:absolute;margin-top:;margin-left:;padding:10px;float:left;">
			<h1 style="font-size: 3em;color:#fff;font-family: font5;float: left;margin-left:103px;margin-top: 57px;"> SMK YPPI </h1>
		</div>
</header>
	<div class="forms" style="margin-top:;">
			<h1  for="usr" style="cursor:default;">Login</h1>
			<div class="form-content">
		<form action="" method="POST">
			<ul class="uls" style="list-style:none;">
				<li>
					<label style="float:left;" for="usr">Username :</label><input id="usr" type="text" name="username" placeholder="Username.." style="padding:2px;" required>
				</li>
				<li>
					<label style="margin-left:3px; margin-top:5px;" for="psw">Password :</label><input id="psw" placeholder="Password.." type="password" name="password" style="padding:2px;margin-left:1px; margin-top:5px;" required>
				</li>
				<li>
					<div style="padding: 4px;padding-top: 6px;">
						<a href="#">Forgot Password?</a>
						<a href="signup.php" style="margin-left: 5px;">Sign Up</a>
					</div>
				</li>
				<li>
					<input type="submit" name="logon" value="Kirim" class="bttn-send" style="	padding:2px; margin-top:10px; " >
				</li>
			</ul>
		</form>
		</div>
		<?php
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
				echo '<script>alert("Berhasil Log In");</script>';
				$_SESSION['strings'] = 1;
				header("location:sss.php");
			}else{
				echo '<script>alert("Gagal Log In");</script>';
				 $_SESSION['strings'] = 0;
				header("location:index.php");
				mysqli_close();
			}
		
	}
	?>
	</div>
		
	<script src="js/jquery.js"></script>
	<script src="js/assets/js/jquery.popup.js"></script>
	<script>
		var x = document.getElementById();
	</script>
	</body>
</html>