<!DOCTYPE html>
<html>
	<head>
		<title>Chart_v2</title>
		<meta charset="utf-8">
		<style type="text/css">
			body{text-align:center;}
		</style>
	</head>
	<body>
		<canvas id="myChart"></canvas>
		<?php $conn = mysqli_connect("localhost","root","","tmp_db"); if(!$conn){echo 'DB NOT Connect!';}
			  $sql="SELECT * FROM form";
			  $query = mysqli_query($conn,$sql);
			  if(!$query){echo 'Query Does NOt Working!';}
			  $i = 1;
				while($row = mysqli_fetch_assoc($query)){		
		?>
			<div style="border:1px solid black;width:350px; height:auto;margin:0 auto; ">
					<label ><?php echo  $i; ?></label>
					<label ><?php echo $row['nama_produk']; ?></label>
					<label><?php echo $row['tipe']; ?></label>
					<label><?php echo $row['nama_image']; ?></label>
					<label><?php echo $row['bagus']; ?></label>
					<label><?php echo $row['kurang_bagus']; ?></label>
					<label><?php echo $row['rusak']; ?></label><br>
			</div>	
				<?php $i++; }?>
		
		<script src="js/Chart.js"></script>
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
		</script>
	</body>
</html>