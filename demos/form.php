<?php
		
		if(isset($_POST['submit'])){
			require("koneksi.php");
			$nama = $_POST['nama_produk'];
			$tipe = $_POST['tipe'];
			
			$bagus = $_POST['bagus'];
			$kurang_bagus = $_POST['kurang_bagus'];
			$rusak = $_POST['rusak'];
			$jumlah = $bagus+$kurang_bagus+$rusak;
				
			$file = $_FILES['file']['name'];
			$tmp_file = $_FILES['file']['tmp_name'];
			$ket = $_POST['keterangan_img'];
			$upload_ok = 1;
			$query_ok = 1;
			
			$sql = "INSERT INTO form (nama_produk,tipe,nama_image,bagus,kurang_bagus,rusak,jumlah,keterangan_img) 
			VALUES ('$nama','$tipe','$file','$bagus','$kurang_bagus','$rusak','$jumlah','$ket')";
			
			$query = mysqli_query($conn , $sql);	
		
			if(!$query){

				echo'<script>alert("Problem On sending Query!");</script>';
				$query_ok = 0;	
			}else{
			
				echo'Querry Ok!';
				 $query_ok = 1;
				
			}

			if(file_exists("image/".$file)){
				echo ' Filenya sudah ada.. ';
				$upload_ok = 0;
			}else{
				$upload_ok = 1;
			}	
			
		if($upload_ok > 0){

			echo 'File Ok!';	
			move_uploaded_file($tmp_file,"image/".$file);
					
		}else{
		  	 echo'Something wrong with the file..';
			
		}

		
			 header("location:sss.php");
		}
	?>