<?php
	session_start();
	include "koneksi.php"; 
	date_default_timezone_set('Asia/Jakarta');

	if (isset($_POST["login"])){
		$nik = $_POST['nik'];
		$password = $_POST['password'];

		if(!empty($nik)){
			if (!empty($password)){
				$sql = "select * from penduduk where nik = '$nik' and password = '$password'";
				$sqlquery = mysql_query($sql);
				$hitunguser = mysql_num_rows($sqlquery);

				if ($hitunguser == 0){
					echo '<script>alert("Nik atau Password Salah");</script>';
				}else{
					$datauser = mysql_fetch_array($sqlquery);
					$_SESSION["nik"] = $datauser["nik"];
					$_SESSION["nama"] = $datauser["nama"];
					$_SESSION["password"] = $datauser["password"];

					header("location:../user/homeuser.php");

				}
			}else{
				echo '<script>alert("Password Masih Kosong");</script>';	
			}
		}else{
			echo '<script>alert("NIK Masih Kosong");</script>';
		}
	}
?>