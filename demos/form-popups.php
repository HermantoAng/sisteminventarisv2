<!DOCTYPE html>
	<?php
	session_start();
	if(!$_SESSION['strings'] > 0){header("location:not_connected.php"); exit;}
 ?>
 <html>
	<head>
		<meta charset="utf-8">
		<meta name="view" content="width=device-width , initial-scale=1">
		<style type="text/css">
			
			*{
				margin:0 auto;
			}
			.md{
				width:50%;
				height:50%;
			}
			table{
				border-collapse:collapse;
				width:100%;
				height:100%;
			}
			table,td,tr{
			
				border-collapse:collapse;
			}
			
			form{
				margin-left:-20px;
				margin-top:-15px;
			}
			input[type=text],input[type=number]{
				padding:3px;
				width:280px;
			}
			button{
				padding:3px;
			}
			label{
				font-size:16px;
				font-family:;
			}
		</Style>
		
	</head>
	<body>
		<div class="md">
			
			<form action="form.php" method="POST" enctype="multipart/form-data">
				<label>Nama :</label> <input type="text" name="nama_produk" required><br>
				<label>Tipe :</label> <input type="text" name="tipe" required><br>
				<label>Bagus :</label> <input type="number" name="bagus" required><br>
				<label>Kurang_bagus :</label> <input type="number" name="kurang_bagus" required><br>
				<label>Rusak :</label> <input type="number" name="rusak" required><br>
				<input type="hidden" name="jumlah">
				<div style="padding:3px;"><input type="file" name="file" id="file"></div>
				<textarea name="keterangan_img" rows="4" placeholder="Keterangan Disini.."></textarea><br>
				<button type="submit" name="submit">Kirim</button>
			</form>
		</div>	
	</body>
 </html>