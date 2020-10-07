<!DOCTYPE html>

<?php
	session_start();
	
	
		if(!$_SESSION['strings'] == 1){
		header("location:index.php");
		exit;
	}
	require("koneksi.php");
			$sql = "SELECT * FROM form";
			$query = mysqli_query($conn , $sql);
				if(!$query){
					echo 'query Failed!';	
				}
?>
 <html>
	<head>
		<link rel="icon" type="image/gif" href="image/ico/ico1.png">
		<title>Table</title>
		<meta charset="utf-8">
		<meta name="view" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/assets/css/popup.css">
		<link rel="stylesheet" type="text/css" href="css/tabel-style.css">
						
	</head>
	<body>
			
	<section class="normal" style="background:dodgerblue; box-shadow:5px 5px 25px;">
		<h1 style="line-height:110px; padding:10px; font-size:2.5em; color:#fff;">Data Barang</h1>
	</section>
	<section class="normal2"></section>
	
	<section class="bl" style="height:20px;"></section>
	<div class="wrapper">
			<?php
				$i = 1; while($row = mysqli_fetch_assoc($query)){
			?>	
		<div class="outline-data-form">
			<section class="data-form">
				<div class="i"><p style="float:; padding:5px;"><?php echo $i; ?>.</p></div>
				<div class="img" style="">
					<div class="img-sm">
						<img src="image/<?php echo $row['nama_image']; ?>" style="z-index:-1;" width="100%" height="100%">
					</div>
				</div>
				<div class="content" style="">
					<div style="padding:10px;padding-bottom:30px;overflow:auto; background:#f8f8f8;">	
						
						<article style="width: 100%;height:;">
							<p style="margin-left:10px; margin-top:5px;">Keterangan:</p>
								<p style="text-indent: 15px;font-size:13px; margin-left: 5px; word-wrap: break-word; overflow:auto;"><?php	echo $row['keterangan_img']; ?></p>
						</article>
					</div>
				</div>
				
			</section>
				<section class="bl" style="height:20px;"></section>
		</div>	
			<?php $i++; }  ?>
	</div>
			<section class="normal2">
				<a href="form-a.php " style="" class="tmb">+</a>
			</section>
		<section class="normal2" style="display:flex;">
			<div class="" style="flex:1; width:30px; height:30px;background:dodgerblue; float:left;">
			</div>
					</section>
	
	<footer style="display:flex;">
						
	</footer>
		
	<script src="js/jquery.js"></script>
	</body>
	
 </html>