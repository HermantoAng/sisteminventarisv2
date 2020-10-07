<!doctype html>
<html>
<head>
	<title>Home</title>
	<link href="../assets/css/popup.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
	*{
		font-style:arial;
	}
	a{text-decoration:none;color:black;}
	.bttn-logout{
			line-height: 26px;
			width:30px;
			padding:0px;
			text-align: center;
			color:#fff;
			text-decoration:none;
			background:; float:right; 
			
			transition:0.2s;
	}	
	.bttn-logout:hover{background:red;transition:0.2s;}
	
			#sidebar{
				display:none;
				width:0px;background:#333;height:130%;position:fixed;margin-top:-50px;
				z-index:1;
		}
			#sidebar ul{width:100%;height:auto;  list-style:none;}
			#sidebar ul li a{  }
			#sidebar ul li{width:;text-align:center;color:#fff; font-size:1.3em; line-height:35px;padding:5px;}
			#sidebar ul li:hover{ background:coral; color:black;transition:0.2s;}
			
			.sidebar-body{
				margin-top:35px;
			}
			.bck-img{
				width:100%;
				height:100%;
				position:absolute;
				z-index:-1;
				opacity:0.4;
				background-image:url("image/ico/smk.png");
				transform:scale(0.7);
				background-size:cover;
				background-repeat:no-repeat;
		
			}
			.bounds{
				width:400px;
				height:auto;
				border-radius:45px;
				background:#f8f8f8; opacity:0.8;
				padding:10px;
				margin:10px;
			}
			.h2s{
				text-decoration:underline;
				color:#333;
				transition:0.2s;
				padding:15px;
				margin-left:20px;
				
			}
			.h2s:hover{
				text-shadow:-1px -1px 1px #333;
				color:;
				transition:0.2s;
				cursor:pointer;
			}
			.searcher{margin-top: -40px;}
			#searchs{
				padding:2px;
				line-height: 25.5px;
				border: 0.5px solid #aaaaaa;
			}
			#searchs:hover{border-color:dodgerblue;}

			#bttn_s1{
				width:60px;
				padding:5px;
				border: 0;
				background: darkblue;
				color: #fff;
				line-height: 20px;
				margin-left: -5px;
				transition: 0.2s;
			}
			#bttn_s1:hover{background: black;transition:0.2s;cursor: pointer;}
			#bttn_s2{
				width:65px;
				padding:5px;
				border: 0;
				background:dodgerblue;
				color: #fff;
				line-height: 20px;
				margin-left: -8px;
				border-top-right-radius:8px;
				border-bottom-right-radius:8px;
				transition: 0.2s;
				z-index: 3;
			}
			#bttn_s2:hover{cursor:pointer;background: black;transition:0.2s;}
			header{border-bottom:2px solid #aaaaaa;}
			.section-tabel2{
				height:auto;
			}
			.box-table2{
				width:80%;
				height:280px;
				margin:0 auto;
						
			}
			.boxtable2:hover{
				box-shadow:4px 4px 15px #aaaaaa;
			}
			.image-table2{
				width:350px;height:250px;
				overflow:hidden;
				
				float:left;
			}
			.article-table2{
				float:left;
				word-wrap:break-word;
			}
	</style>
		
</head>
<body>
	<?php
		error_reporting(0);
		session_start();		
			
			if(!$_SESSION['strings'] == 1){
				echo '<script>alert("Silakan Login Dulu..");</script>';
		header("refresh:0.5;url=index.php");
		exit;
	}else{	

			require_once('user.php');
	}
	 ?>
	 
	<div id="sidebar" style="z-index:2;" >
			<section style="height:20px;z-index:2;"><a href="#" style="color:#fff;font-size:2em;margin-top:40px; float:right;padding: 10px;padding-left:-15px;" onclick="closeSidebar()">&times;</a></section>	
		
			<div class="sidebar-body" style="margin-top:40px;">
	
				<ul style="padding-top: 30px;">
					<a href="#"><li>Home</li></a>
					<a href="#"><li>Main-Table</li></a>
					<a href="#"><li>Second-Table</li></a>
					<a href="#"><li>About Us</li></a>
					<a href="#"><li>Register</li></a>
				</ul>
			</div>
		</div>
	<header style="height:36px; background:darkblue;padding: 0;color:#fff;position: fixed;transition: 0.4s;width:100%;z-index: 1;">
		
			

			<div style="float:right;">

				<a onclick="return confirm('Log Out?');" href="logout.php" class="bttn-logout" style="padding:5px;border: 0;cursor:pointer;"><i class="fas fa-sign-out-alt" style="color:white;"></i><label style="position:absolute;margin-top:10px;margin-left:-25px;font-size:10px;cursor:pointer;font-family:;">Logout</label></a>
			</div>

			<div style="width:35px;float:left;padding-left:5px;" class="side-open">
				<a  href="#"  id="bxs" style="color:#fff;" onclick="openSidebar()">&#9776;</a>

			</div>
			
			
	</header>
	
	<nav>
		<div style="width:99%;height:100%;">
			<img src="image/ico/logo.png" width="270px" height="80px" style="padding:10px;padding-top:25px;cursor:pointer;margin-top: 35px;margin-left: 30px;">
		</div>
	</nav>
			
		<!-- ---------CONTENT-------- -->

			<!-- MAIN-CONTENT -->
	
		
	<div class="wrapper" style="margin-top:20px;">
			<div class="bck-img"></div>		
			
			<div class="table-top" style="background:#f8f8f8;border-radius:45px; padding:35px;opacity:0.8;z-index: -1;">
			<p class="" style="float:left;width:200px; height:30px; background :#fff;text-align:center;color:#black;font-size:2em;line-height:30px;padding:5px;margin-top:-14px;margin-left:5px;"><b>Data Barang</b></p>
			
			<div style="width:90%;height: 50px;margin:0 auto;">
				<div class="searcher" style="float:right;line-height: 30px;padding: 5px;z-index:2;margin-top: -25px;">
					<form action="" method="GET">
						<input type="search" name="search" id="searchs" style="margin-top: -10px;"> 
						<input type="submit" name="search_bttn" value="Search" id="bttn_s1" >
						<input type="submit" name="refresh" value="Refresh" id="bttn_s2" >
					</form>	
				</div>
			</div>
				<table id="custom1" style="opacity:1;font-size:18px;margin-top: -15px;">
					<tr>
						<th>No</th>
						<th>Nama Produk</th>
						<th>Tipe</th>
						<th>Bagus</th>
						<th>Kurang Bagus</th>
						<th>Rusak</th>
						<th>Jumlah</th>
						<th style="text-align:center;"colspan="2">Other</td>

					</tr>
				
						<?php
								if(isset($_GET['refresh'])){
									$refresh = $_GET['refresh'];
									$sqlss = " SELECT * FROM form";
								}				
								if(isset($_GET['search_bttn'])){
									$search = $_GET['search'];
									$sqlss = "SELECT * FROM form WHERE nama_produk LIKE '%".$search."%'"; 
								}else{
									$sqlss = 'SELECT * FROM form';
								}
								$db = "localhost"; $user ="root"; $pss=""; $dbs="tmp_db";
								$conn =	mysqli_connect($db,$user,$pss,$dbs);
								$query =mysqli_query($conn ,$sqlss );
								$i =1;
						 		 while($row = mysqli_fetch_assoc($query)) : 
						 ?>
					<tr>

						<td ><p style="margin-left: 15px;"><?php echo $row['id_db']; ?></p></td>
						<td><p><?php echo $row['nama_produk']; ?></p></td>
						<td><p><?php echo $row['tipe']; ?></p></td>
						<td><p><?php echo $row['bagus']; ?></p></td>
						<td><p><?php echo $row['kurang_bagus']; ?></p></td>
						<td><p><?php echo $row['rusak']; ?></p></td>
						<td><p><?php echo $row['jumlah']; ?></p></td>
						<td style="text-align: center;">
						<a href="image/<?php echo $row['nama_image']; ?>" class="default_popup bttn">View</a>
						<a href="chart.php?id_db=<?php echo $row['id_db']; ?>" class="default_popup bttn">Details</a>
					
						</td>
						<td style="margin:0 auto; text-align:center;" colspan="2">
						
						<a onclick="return confirm('Edit?');" style="background-color: red; text-decoration:none; color:#fff; padding:4px; text-align:center; margin:0 auto;" href="edit.php?id_db=<?php echo $row['id_db']; ?> " >Edit</a>
						<a onclick="return confirm('Hapus?');" style="background-color: red; text-decoration:none; color:#fff; padding:4px; text-align:center; margin:0 auto;" href="hapus.php?id_db=<?php echo $row['id_db']; ?> " >Hapus</a>
				
							</td>
					</tr>	
						<?php $ket_data = $row['keterangan_img'];   $i++;  ?>
					<?php endwhile; ?>
			</table>
					<div class="" style="width: 100%;height: auto; margin-top: 20px;">
						<a href="form-popups.php" style="padding: 10px;background-color: dodgerblue;text-decoration: none;color: #fff;margin-left: 40%;" class="youtube_popup_2" >Tambah</a>
					</div>
		</div>	
</div>
		<!-- Another -->	
			
		
	
			<!-- Tabel 2 -->


		<?php 
				  $conn2 = mysqli_connect("localhost","root","","tmp_db")or die("CONN NOT CONNECT!");
				  if(!$conn2){echo 'Problem LINE 244';}
					if(isset($_GET['refresh'])){
									$refresh = $_GET['refresh'];
									$sql244 = " SELECT * FROM form";
								}				
								if(isset($_GET['search_bttn'])){
									$search = $_GET['search'];
									$sql244 = "SELECT * FROM form WHERE nama_produk LIKE '%".$search."%'"; 
								}else{
									$sql244 = 'SELECT * FROM form';
								}
				  $query244 = mysqli_query($conn2,$sql244);
				  if(!$query244){echo 'PROBLEM ON QUERY LINE 244';}
					
					
					
		?>
		<section style="height:auto;margin-top:20px;">
		<div class="table-top" style="background:#f8f8f8;border-radius:45px; padding:35px;opacity:0.8;z-index: -1;">
			<p class="" style="float:left;width:150px; height:30px; background :#fff;text-align:center;color:#black;font-size:2em;line-height:30px;padding:5px;margin-top:-14px;margin-left:5px;"><b>Keterangan</b></p>
			
			<table id="custom1" style="opacity:1;font-size:18px;margin-top: -15px;width:95%;">
				
				<tr>
				<th style="padding:10px;font-size:1.0em;">ID</th>
					<th style="padding:10px;font-size:1.0em;">Produk</th>
					<th style="padding:10px;font-size:1.0em;">Deskripsi</th>
				</tr>
				<?php while($roww = mysqli_fetch_assoc($query244)){ ?>
					<tr class="box-table2">
					<td style="width:5%;"><p style="line-height:10px;transform:translate(0,50px);"><?php echo $roww['id_db']; ?></p></td>
					<td style="width:35%;">
					<a onclick="return confirm('Edit?');" " href="edit.php?id_db=<?php echo $roww['id_db']; ?>">
					<img src="image/<?php echo $roww['nama_image'];?>" class="image-table2" style="margin:0 auto;">
				</a>	
				</td>
					<td style="transform:translate(0px,-25%); width:60%;font-family:arial;">
					<a onclick="return confirm('Edit?');" " href="edit.php?id_db=<?php echo $roww['id_db']; ?>">
					<article class="article-table2"> <?php
							echo $roww['keterangan_img'];	
							 
							
					?> </article>
					</a>
					</td>
					</tr>	
				<?php } ?>
			</table>
		</div>
	</section>
		<footer style="height:300px; background:#333;">
			<div style="text-align:center;color:#fff;padding-top:260px;">
				<label style="font-size:20px;">&copy;&nbsp;Copyright By SMKS YPPI TUALNG Hermanto XI TKJI</label>
			</div>
		</footer>
		
		<script src="js/chart.js"></script>
		<script>
			var ctx = document.getElementById('myChart').getContext('2d');
			
		var myChart = new Chart(ctx ,{
			type: 'bar',
			data: {
				labels: ["bagus", "kurang_bagus", "rusak", "jumlah"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_bagus = mysqli_query($conn,"SELECT * FROM form WHERE ='bagus'");
					echo mysqli_num_rows($jumlah_bagus);
					?>, 
					<?php 
					$jumlah_kurang_bagus = mysqli_query($conn,"SELECT * FROM form WHERE ='kurang_bagus'");
					echo mysqli_num_rows($jumlah_kurang_bagus);
					?>, 
					<?php 
					$jumlah_rusak = mysqli_query($conn,"SELECT * FROM form WHERE ='rusak'");
					echo mysqli_num_rows($jumlah_rusak);
					?>, 
					<?php 
					$jumlah_jumlah = mysqli_query($conn,"SELECT * FROM form WHERE ='jumlah'");
					echo mysqli_num_rows($jumlah_jumlah);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
/*var myChart = new Chart(ctx, {
    type: 'circle',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
*/		</script>
	<script src="js/jquery_v2.js"></script>
	
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	-->
	<script src="../assets/js/jquery.popup.js"></script>
	<script>
			function openSidebar(){
				document.getElementById('sidebar').style.width='200px';
				document.getElementById('sidebar').style.display ='block';
				document.getElementById('bxs').style.display ='none';
			}
			function closeSidebar(){
				document.getElementById('sidebar').style.width='0px';
				document.getElementById('sidebar').style.display ='none';
				document.getElementById('bxs').style.display ='block';
			}
	</script>
		
		<script>
		
		</script>
	<script>
		function navigasi(){
			var x = document.getElementById("wrp2");
			
			x.style("display","block");
			
		}
		$(function(){
				
				
			/*-------------------------------

				GENERAL EXAMPLES

			-------------------------------*/

			// Default usage
			$('.default_popup').popup();

			// Function for content
			$('.function_popup').popup({
				content		: function(){
					return '<p>'+$(this.ele).attr('title')+'</p>';
				}
			});

			// jQuery for content
			$('.jquery_popup').popup({
				content		: $('#inline')
			});

			// HTML for content
			$('.html_popup').popup({
				content		: '<?php echo $row['keterangan_img'];?>',
				type		: 'html'
			});
			$('.html2_popup').popup({
				content		: '<h1>Form</h1>  ',
				type		: 'html'
			});

			// Custom YouTube content
			$('.youtube_popup').popup({
				types		: {
					youtube			: function(content, callback){

						content = '<iframe width="720" height="920" src="'+content+'" frameborder="0" allowfullscreen></iframe>';

						// Don't forget to call the callback!
						callback.call(this, content);

					}
				},
				width				: 420,
				height				: 315
			});
			//Custom Youtube_popup_2
				$('.youtube_popup_2').popup({
				types		: {
					youtube			: function(content, callback){

						content = '<iframe width="680" height="680" src="'+content+'" frameborder="0" allowfullscreen></iframe>';

						// Don't forget to call the callback!
						callback.call(this, content);

					}
				},
				width				: 420,
				height				: 315
			});


			// Animated popup
			$('.animated_popup').popup({
				show				: function($popup, $back){

					var plugin = this,
						center = plugin.getCenter();

					$popup
						.css({
							top     : - $popup.children().outerHeight(),
							left    : center.left,
							opacity	: 1
						})
						.animate({top : center.top}, 500, 'easeOutBack', function(){
							// Call the open callback
							plugin.o.afterOpen.call(plugin);
						});

				}
			});

			// Call ALL the callbacks
			$('.callback_popup').popup({
				beforeOpen          : function(type){
					console.log('beforeOpen -', type);
				},
				afterOpen           : function(){
					console.log('afterOpen');
				},
				beforeClose         : function(){
					console.log('beforeClose');
				},
				afterClose          : function(){
					console.log('afterClose');
				}
			});

			// Different preloader
			$('.preloader_popup').popup({
				preloaderContent	: '<img src="assets/images/preloader.gif" class="preloader">'
			});

			// Error popup
			$('.error_popup').popup({
				error		: function(content, type){

					// Just call open again, it'll replace the content
					this.open('<h1>ERROR!</h1><p>Content "'+content+'" of type "'+type+'" could not be loaded.</p>', 'html');
				}
			});

		});

		/*---------------------

			JQUERY EASING

		*/

		$.extend($.easing, {
			easeOutBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
			},
			easeInBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*(t/=d)*t*((s+1)*t - s) + b;
			}
		});

		/*-------------------------------

			GALLERY SPECIFIC CODE

		-------------------------------*/

		/*---------------------

			SETTINGS

		*/

		var gallerySettings = {
				markup		: '' +
					'<div class="popup">' +
						'<div class="popup_wrap">' +
							'<div class="popup_content"/>' +
						'</div>' +
						'<a href="#next">Next</a>' +
						'<a href="#prev">Previous</a>' +
					'</div>',
				// This is a custom variable
				gallery		: '.popup_gallery',
				replaced	: function($popup, $back){

					var plugin = this,
						$wrap = $('.popup_wrap', $popup);

					// Animate the popup to new size
					$wrap.animate({
						width 	: $wrap.children().children().outerWidth(true),
						height 	: $wrap.children().children().outerHeight(true)
					}, {
						duration	: 500,
						easing		: 'easeOutBack',
						step		: function(){

							// Need to center the poup on each step
							$popup
								.css({
									top		: plugin.getCenter().top,
									left	: plugin.getCenter().left
								});

						},
						complete	: function(){

							// Fade in!
							$wrap
								.children()
								.animate({opacity : 1}, plugin.o.speed, function(){
									plugin.center();
									plugin.o.afterOpen.call(plugin);
								});

						}
					});
				},
				show		: function($popup, $back){

					var plugin = this,
						$wrap = $('.popup_wrap', $popup);

					// Center the plugin
					plugin.center();

					// Default fade in
					$popup
						.animate({opacity : 1}, plugin.o.speed, function(){
							plugin.o.afterOpen.call(plugin);
						});

					// Set the inline styles as we animate later
					$wrap.css({
						width 	: $wrap.outerWidth(true),
						height 	: $wrap.outerHeight(true)
					});

				},
				afterClose		: function(){
					this.currentIndex = undefined;
				}

			};

		$(function(){

			/*---------------------

				POPUP

			*/

			$('.popup_gallery').popup(gallerySettings);

			/*---------------------

				NEXT & PREVIOUS LINKS

			*/

			$(document).on('click', '[href="#next"], [href="#prev"]', function(e){

				e.preventDefault();

				var $current = $('.popup_active'),
					popup = $current.data('popup'),
					$items = $(popup.o.gallery);

				// If this is the first time
				// and we don't have a currentIndex set
				if( popup.currentIndex === undefined ){

					popup.currentIndex = $items.index($current);

				}

				// Fade the current item out
				$('.'+popup.o.contentClass)
					.animate({opacity : 0}, 'fast', function(){

						// Get the next index
						var newIndex = $(e.target).attr('href') === '#next'
							? popup.currentIndex + 1
							: popup.currentIndex - 1;

						// Make sure the index is valid
						if( newIndex > $items.length -1 ){

							popup.currentIndex = 0;

						}else if( newIndex < 0 ){

							popup.currentIndex = $items.length - 1;

						}else{

							popup.currentIndex = newIndex;

						}

						// Get the new current link
						$current = $($items[popup.currentIndex]);

						// Load the content
						popup.open($current.attr('href'), undefined, $current[0]);

					});

			});

		});

		/*---------------------

			JQUERY EASING

		*/

		$.extend($.easing, {
			easeOutBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
			},
			easeInBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*(t/=d)*t*((s+1)*t - s) + b;
			}
		});

	</script>

	
</body>
</html>