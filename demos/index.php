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
				background: url("image/ico/bck01.jpg");
			
				background-position:40%, 40% ;

				background-size: cover;
				min-height: 100%;
			}
			header{
				height:90px;
				background: black;
				
				opacity:0.84;
				
			}
			.bck-bck{
					position: fixed;
					z-index: -1;
					width: 100%;
					height:100%;
					opacity: 0.1;
					background-image: linear-gradient(to right,#f8f8f8,#fff);
			
			}
			nav{
				
			}
			.bt-nv{

				
			}
			.forms{
				width:460px;
				height:345px;
				background:#fff;
				margin:0 auto;
				opacity: 0.8;
				border-radius: 25px;
				margin-top:35px;				
			}
			.forms h1{
				font-family: font6;
				background:dodgerblue;
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
		@media screen and (max)
		</style>
	</head>
	
	<body>
		
	<?php
		if(isset($_COOKIE['message'])){
			echo $_COOKIE['message'];
		}
		?>
		<div class="bck-bck"></div>
			
	</div>
<header style="display: flex;z-index: -1;	">
	<div class="hdr-img" style="z-index:1;flex:1; flex-basis: 15%;">
		<img src="image/ico/smk.png" style="width:100px;height:100px;position:absolute;margin-top:;margin-left:;padding:10px;float:left;">
		<h1 style="font-size: 1.7em;line-height:20px;color:white;font-family: font5;float: left;margin-left:104px;margin-top: 63px;word-spacing: 2px;"> SMK YPPI </h1>
	</div >
	<div class="hd-side" style="flex:1; flex-basis: 75%;">
				
				<h1 style="font-size: 2.0em;font-family:arial black;color:white;text-align: center;margin-top:9px;margin-left: -250px;cursor:default;">
					SISTEM INVENTARIS<br> </h1><h1 style="font-size: 1.5em;font-family:arial black;color:white;text-align: center;margin-top:-10px;margin-left: -250px;cursor:default;">TEKNIK KOMPUTER DAN JARINGAN
				</h1>

	</div>
	
</header>
	<div class="forms" style="margin-top:;">
			<h1  for="usr" style="cursor:default;">Login</h1>
			<div class="form-content">
		<form action="login.php" method="POST">
			<ul class="uls" style="list-style:none;">
				<li>
						<b><label style="float:left;" for="usr">Username :</label></b><input id="usr" type="text" name="username" placeholder="Username.." style="padding:2px;" required>
				</li>
				<li>
					<b><label style="margin-left:3px; margin-top:5px;" for="psw">Password :</label></b><input id="psw" placeholder="Password.." type="password" name="password" style="padding:2px;margin-left:1px; margin-top:5px;" required>
				</li>
			
				<li>
					<input type="submit" name="logon" value="Kirim" class="bttn-send" style="	padding:2px; margin-top:10px; " >
				</li>
			</ul>
		</form>
		</div>
		
	</div>
	<footer style="background-color:black;height: 300px;margin-top:100px;">
			<p style="padding:5px;font-size:1em;text-align: center;color:#fff;">&copy; Copyright By SMK YPPI TUALANG Hermanto XI TKJI</p>
	</footer>	
	<script src="js/jquery.js"></script>
	<script src="js/assets/js/jquery.popup.js"></script>
	<script>
		var x = document.getElementById();
	</script>
	</body>
</html>