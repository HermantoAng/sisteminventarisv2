<?php 	
		
		$conn = mysqli_connect("localhost","root","","tmp_db");
		$sql = "SELECT * FROM  form";
		
		$query = mysqli_query($conn,$sql);
		if(!$query){
			echo 'gagal ON LINE 5';
		}

?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Edit2</title>
			<style type="text/css"></style>	
			<?php

//ambil data berdasarkan parameter GET id
$b = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM form WHERE id_db='$_GET[id_db]'"));


//buat variabel dari setiap field name form produk
$nama= mysqli_real_escape_string($conn, $_POST['nama_produk']);   
$tipe= mysqli_real_escape_string($conn, $_POST['tipe']);   
$bagus= mysqli_real_escape_string($conn, $_POST['bagus']); 
$kurang_bagus= mysqli_real_escape_string($conn, $_POST['kurang_bagus']);     
$rusak= mysqli_real_escape_string($conn, $_POST['rusak']);  
$jumlah= mysqli_real_escape_string($conn, $_POST['jumlah']);      
$ket_img= mysqli_real_escape_string($conn, $_POST['keterangan_img']);
$nama_img= mysqli_real_escape_string($conn, $_POST['nama_img']);      



?>
		</head>
		<body>
			

				<div class="editv2">
							<form action="" method="POST" enctype="multipart/form-data">
								<label>Nama</label>
								<input type="text" name="nama_produk" placeholder="Nama" size="" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['nama_produk'];?>"/><br>
								<label>Tipe</label>
								<input type="text" name="tipe" placeholder="Nama" size="" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['tipe'];?>"/><br>
								<label>Bagus</label>
								<input type="text" name="bagus" placeholder="Nama" size="" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['bagus'];?>"/><br>
								<label>Kurang Bagus</label>
								<input type="text" name="kurang_bagus" placeholder="Nama" size="" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['kurang_bagus'];?>"/><br>
								<label>Rusak</label>
								<input type="text" name="rusak
								" placeholder="Rusak" size="" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['rusak'];?>"/><br>
								<input type="hidden" name="jumlah"><br>								
								<label>Keterangan:</label><br>
								<textarea name="keterangan_img" placeholder="Keterangan Image" size="" maxlength="30" autocomplete="off" cols="40" colspan="3000" autofocus><?php echo $b['keterangan_img'];?></textarea><br>
								<button type="submit" name="submit">Kirim</button>

							</form>

				</div>
				
				<?php
					if(isset($_POST['submit'])){
 if(empty($nama)){    //jika nama kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Nama </p>";
    }
    elseif(empty($tipe)){ //jika kategori kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukkan Tipe</p>";
    }

	else{  //jika semua sudah terpenuhi maka update ke tb_produk


       // $sql = "UPDATE form set nama='$nama',tipe='$tipe',bagus='$bagus',kurang_bagus='$kurang_bagus',rusak='$rusak',jumlah='$jumlah', WHERE id_barang='$_GET[id]'";
         $id = $_GET['id_db'];
         $jumlah = $bagus +$kurang_bagus +$rusak;      
		
        $sqls1s = "UPDATE form SET nama_produk='$nama' , tipe='$tipe', nama_img='$nama_img' , bagus='$bagus' , kurang_bagus='$kurang_bagus' , rusak='$rusak' , jumlah='$jumlah', keterangan_img='$ket_img' WHERE id_db=$id ";

    $save=mysqli_query($conn, $sqls1s );
    if($save){
     //jika update berhasil maka muncul pesan dan menuju ke halaman produk
     
        echo "<script>alert('Berhasil Edit data!')</script> ";
        header("refresh:1;");
        header("location:sss.php");
      
       }else{  //jika update gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');</script>";
 		header("location:sss.php");
    }
}
}
				?>
		</body>
		</html>