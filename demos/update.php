<?php
	
	$conn = mysqli_connect("localhost","root","","tmp_db");

	//Variable
	$id_db = $_POST['id_db'];
	$nama_produk = $_POST['nama_produk'];
	$tipe = $_POST['tipe'];
	$nama_image = $_POST['nama_image'];
	$bagus = $_POST['bagus'];
	$kurang_bagus = $_POST['kurang_bagus'];
	$rusak = $_POST['rusak'];
	$jumlah = $bagus+$kurang_bagus+$rusak;
	$keterangan_img = $_POST['keterangan_img'];

	//Query
		$sql ="UPDATE form SET nama_produk='$nama_produk',
							   tipe='$tipe',
							   nama_image='$nama_image',
							   bagus='$bagus',
							   kurang_bagus='$kurang_bagus',
							   rusak='$rusak',
							   jumlah='$jumlah',
							   keterangan_img='$keterangan_img'	 WHERE id_db='$id_db'";		
		
			if($conn->query($sql) ===true){
				echo '<script>Berhasil mengubah data</script>';
				header("refresh:0.4;url=sss.php");
			}else{
				echo 'Error '.$conn->error;
				header("refresh:0.4;url=sss.php");
			} 

			$conn->close();
		
		

?>

