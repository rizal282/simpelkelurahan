<?php
	session_start();
	include "koneksi.php"; 

	if (isset($_POST["nip-admin"])){
		$nipadmin = $_POST['nip-admin'];
		$passadm = $_POST['inp-pass'];

		if(!empty($nipadmin)){
			if (!empty($passadm)){
				$sql = "select * from admin where nip = '$nipadmin' and password = '$passadm'";
				$sqlquery = mysql_query($sql);
				$hitungadmin = mysql_num_rows($sqlquery);

				if ($hitungadmin == 0){
					echo '<div class="alert alert-warning" role="alert"> Nip atau Password Salah</div';
				}else{
					$dataadmin = mysql_fetch_array($sqlquery);
					$_SESSION["id_admin"] = $dataadmin["id_admin"];
					$_SESSION["nip"] = $dataadmin["nip"];
					$_SESSION["nama"] = $dataadmin["nama_admin"];
					$_SESSION["password"] = $dataadmin["password"];
					$_SESSION["level"] = $dataadmin["level"];

					header("location:../admin/homeadmin.php");

				}
			}else{
				echo '<div class="alert alert-warning" role="alert"> Password Masih Kosong</div';	
			}
		}else{
			echo '<div class="alert alert-warning" role="alert"> NIP Masih Kosong</div';
		}
	}
?>