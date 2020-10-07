<?php
	require('koneksi.php');
	
	$sql = "SELECT * FROM form LIMIT 20";
	$response = array();
	$posts = array();
	$query = mysqli_query($conn , $sql);
		while($row = mysqli_fetch_assoc($query) ){
			$id = $row['id_db'];
			$nama = $row['nama_produk'];
			$tipe = $row['tipe'];
			$bagus = $row['bagus'];
			$kurang_bagus = $row['kurang_bagus'];
			$rusak = $row['rusak'];
			$jumlah = $row['jumlah'];
			$keterangan_img = $row['keterangan_img'];
			$nama_image = $row['nama_image'];
			
			$posts= array('id_db' => $id,'nama_produk' =>$nama,'tipe'=>$tipe,'bagus' =>$bagus,'kurang_bagus'=>$kurang_bagus,'rusak'=>$rusak,'jumlah'=>$jumlah,'keterangan_img' => $keterangan_img,'nama_image'=>$nama_image);
			
			
		}
		$response['posts'] = $posts;
		$fp = fopen('results.json' , 'w');
		fwrite($fp , json_encode($response));
		fclose($fp);
?>