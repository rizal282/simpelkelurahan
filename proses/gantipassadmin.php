<?php
 if(isset($_POST["submit"])){
 	$psl = $_POST["password_lama"];
 	$psb = $_POST["password_baru"];
 	$kps = $_POST["konf_password"];

 	$sql_password="select password from admin where nip = '".$_SESSION["nip"]."'";
 	$hasil= mysql_query($sql_password);
 	$row =mysql_fetch_array($hasil);

 	//echo $row["password"];

 	if(!empty($psl) && !empty($psb) && !empty($kps)){
 		if($psl == $row["password"]){
 			if($psb != $psl){
 				if($kps == $psb){
 					$sql = "update admin set password = '".$psb."' where nip = '".$_SESSION["nip"]."'";
		 			mysql_query($sql);
		 			echo '<div class="alert alert-warning" role="alert">Password Anda Berhasil Di Perbarui!!</div>';
 				}else{
 					echo '<div class="alert alert-warning">Konfirmasi Password Baru Tidak Sama Dengan Password Baru</div>';
 				}
 			}else{
 				echo '<div class="alert alert-warning">Password Baru Jangan Sama Dengan Password Lama</div>';
 			}
 		}else{
 			echo '<div class="alert alert-warning">Password Lama Tidak Sama</div>';
 		}
 	}else{
 		echo '<div class="alert alert-warning">Form Jangan Kosong</div>';
 	}
 	

 	
 }
?>

