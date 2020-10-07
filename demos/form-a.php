<!DOCTYPE html>

<?php
	session_start();
	
	if(!$_SESSION['strings'] > 0){
		header("location:index.php");
		exit;
	}
?>
 <html>
	<head>
		<link rel="icon" type="image/gif" href="image/ico/ico1.png">
		<title>Form</title>
		<meta charset="utf-8">
		<meta name="view" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="css/main.css">
		<style type="text/css">
			*{
				margin:0 auto;
				padding:0;
			}
			body{
				
			}
			.wrapper{
				width:40%;
				height:300px;
				background:;
			}
		</Style>
		
	</head>
	<body>
	<div class="wrapper">
		<div style="padding:30px; ">
			<a href="logout.php" style="	">LogOut</a>
			<form action="form.php" method="POST" enctype="multipart/form-data">
				<ul style="list-style:none;">
					<li>
						<label>Nama :</label> <input type="text" name="nama_produk" required>
					</li>
					<li>
						<label>Tipe :</label> <input type="text" name="tipe" required>
					</li>
					<li>
						<label>Bagus</label> <input type="number" name="bagus" >
					</li>
					<li>
						<label>Kurang Bagus :</label> <input type="number" name="kurang_bagus" >
					</li>
					
					<li>	
						<label>Rusak :</label> <input type="number" name="rusak" >
					</li>
					<li>
						<input type="hidden" name="jumlah">
					</li>
					<li>	
						 <input type="file" name="file" id="file" >
					</li>
					<li>
						<textarea col="3" name="keterangan_img" placeholder="Keterangan produk.."> </textarea>
					</li>
					<li>
						<input type="submit" name="submit" value="Kirim"> 
					</li>
				
				</ul>
			</form>
			<div class="" style="padding-left:15px;  ">
		
		<label class="a"><a href="tabel.php" style="" >Table</a>  / </label><label class="a"><a href="form-a.php">Insert Data</a>  / </label>
		</div>
			</div>
				</div>

		<script type="javascript/js">
			var i = 1;
			alert(var i);
		</script>	
	</body>
 </html>