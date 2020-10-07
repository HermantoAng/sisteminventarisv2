 <?php
 	$conn = mysqli_connect("localhost","root","","tmp_db");
 		$id_db = $_GET['id_db'];

 		if(isset($id_db)){
 			$sql = "DELETE FROM form WHERE id_db = $id_db";
 			
 			$query = mysqli_query($conn,$sql);
 				if(!$query){
 					echo 'problem on line 8!';
 					header("refresh:1;location:sss.php");
 				}else{
 					header("location:sss.php");
 				}

 		}else{
 			echo '
 				<script>alert("Akses Dilarang!");</script>
 			';
 		}
 ?>