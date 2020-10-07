<!DOCTYPE html>

<?php
	session_start();
	
	
		if(!$_SESSION['strings'] > 0){
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
		<link rel="stylesheet" type="text/css" href="../popup/assets/css/popup.css">
		<link rel="stylesheet" type="text/css" href="css/tabel-style.css">
		<style type="text/css">
			
			.tbl-box{
				width:80%;
				height:auto;
			}
			.nam{
				width:30%;
				height:50px;
			}
			.num{
				width:10%;
				height:50px;
			}
			table{
				width:100%;
				height:auto;
				border:1px solid black;
				border-collapse: collapse;
			}
			tr{
				border:1px solid black;
				border-collapse: collapse;
				line-height: 35px;
			}
			td{
				border:1px solid black;
				border-collapse: collapse;
				padding:10px;
			}
			tr:nd-child{
				background:red;
			}
			
			
			/*///////  POPUP  //////////////*/
			
				/* Some basic style resets to make the page look slightly nicer */
		h1, h2 {
			font-family: Arial, sans-serif;
			margin: 10px 0;
		}

		p, a {
			font-family: Verdana, sans-serif;
			font-size: 13px;
		}

		/* Gallery */
		[href="#next"] {
			float: right;
		}

		[href="#prev"] {
			float: left;
		}

		[href="#next"], [href="#prev"] {
			padding-top: 10px;
		}

		div.popup {
			overflow: hidden;
		}
		</style>						
	</head>
	<body>
	
	<header>
			<a href="logout.php">Logout</a>
	</header>		
	<nav class="nav1">
			
	</nav>
	<section class="normal" style="background:dodgerblue; box-shadow:5px 5px 25px;">
		<h1 style="line-height:110px; padding:10px; font-size:2.5em; color:#fff;">Data Barang</h1>
	</section>
	<section class="normal2"></section>
	<div class="" style="padding-left:15px;  ">
		
		<label class="a"><a href="tabel.php" style="" >Table</a>  / </label><label class="a"><a href="form-a.php">Insert Data</a>  / </label>
		</div>
	</div>	
	<section class="bl" style="height:20px;"></section>
		<div class="tbl-box">
			<table>
						<tr>
							<td class="nam">
								<p>Nama</p>
							</td>
							<td class="nam">
								<p>Tipe</p>
							</td>
							<td class="num">
								<p>Bagus</p>
							</td>
							<td class="num">
								<p>Kurang Bagus</p>
							</td>
							<td class="num">
								<p>Rusak</p>
							</td>
							<td class="num">
								<p>Jumlah</p>
							</td>
							<td></td>
						</tr>
				
			<?php
				$s = 1; while($row2 = mysqli_fetch_assoc($query)){
			?>	

						<tr>
							<td class="nam">
								<p><?php echo $row2['nama_produk']; ?></p>
							</td>
							<td class="nam">
								<p><?php echo $row2['tipe']; ?></p>
							</td>
							<td class="num">
								<p><?php echo $row2['bagus']; ?></p>
							</td>
							<td class="num">
								<p><?php echo $row2['kurang_bagus']; ?></p>
							</td>
							<td class="num">
								<p><?php echo $row2['rusak']; ?></p>
							</td>
							<td class="num">
								<p><?php echo $row2['jumlah']; ?></p>
							</td>
							<td>
								<a href="#" class="html_popup">Edit</a>
								
							</td>
						</tr>
					<?php $s++; }  ?>	
					</table>
				</div>
				<section class="bl" style="height:20px;"></section>
		</div>	
						
	</div>
			<section class="normal2">
				<a href="form-a.php " style="" class="tmb">+</a>
			</section>
		<section class="normal2" style="display:flex;">
			<div class="" style="flex:1; width:30px; height:30px;background:dodgerblue; float:left;">
			</div>
					</section>
			


	<footer style="display:flex;">
						<div class="ft-1">
							<div class="ft-box"></div>
							<div class="ft-box"></div>
							<div class="ft-box"></div>
						</div>
	</footer>
		
		
	<script src="js/jquery.js"></script>
	<script src="../popup/assets/js/jquery.popup.js"></script>
	<script src="js/popup-content.js"></script>
	<script>
		
	</script>	
	</body>
 </html>